<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesModel;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;

class AdminTransactionController extends Controller
{
    public function index(Request $request)
    {
        $branchId = Auth::user()->branch_id;

        $search = $request->input('search');
        $filterCategory = $request->input('category');

        $query = SalesModel::where('branch_id', $branchId);

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('category', 'like', "%{$search}%")
                  ->orWhere('invoice_no', 'like', "%{$search}%");
            });
        }

        if ($filterCategory) {
            $query->where('category', $filterCategory);
        }

        $transactions = $query->orderBy('invoice_date', 'desc')
                              ->orderBy('created_at', 'desc')
                              ->paginate(10);

        return view('admin.data-transaksi', compact('transactions', 'search', 'filterCategory'));
    }

    public function create()
    {
        return view('admin.input-data');
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoice_date' => 'required|date',
            'category'     => 'required|string',
            'quantity'     => 'required|integer|min:1',
            'price'        => 'required|numeric|min:0',
        ]);

        $invoiceNo    = 'I' . rand(100000, 999999);
        $customerId   = 'C' . rand(100000, 999999);
        $totalSales   = $request->quantity * $request->price;
        $randomGender = ['Male', 'Female'][array_rand(['Male', 'Female'])];
        $randomAge    = rand(18, 65);

        $user   = Auth::user();

        // Ambil nama toko dari tabel branches
        $branch   = Branch::where('branch_id', $user->branch_id)->first();
        $namaToko = $branch ? $branch->name : '-';

        SalesModel::create([
            'branch_id'      => $user->branch_id,
            'invoice_no'     => $invoiceNo,
            'customer_id'    => $customerId,
            'gender'         => $randomGender,
            'age'            => $randomAge,
            'category'       => $request->category,
            'quantity'       => $request->quantity,
            'price'          => $request->price,
            'payment_method' => 'Cash',
            'invoice_date'   => $request->invoice_date,
            'shopping_mall'  => $namaToko,
            'total_sales'    => $totalSales,
        ]);

        return redirect()->route('admin.transaksi')->with('success', 'Data transaksi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $branchId    = Auth::user()->branch_id;
        $transaction = SalesModel::where('branch_id', $branchId)->findOrFail($id);

        return view('admin.edit-transaksi', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'invoice_date' => 'required|date',
            'category'     => 'required|string',
            'quantity'     => 'required|integer|min:1',
            'price'        => 'required|numeric|min:0',
        ]);

        $branchId    = Auth::user()->branch_id;
        $transaction = SalesModel::where('branch_id', $branchId)->findOrFail($id);
        $totalSales  = $request->quantity * $request->price;

        $transaction->update([
            'invoice_date' => $request->invoice_date,
            'category'     => $request->category,
            'quantity'     => $request->quantity,
            'price'        => $request->price,
            'total_sales'  => $totalSales,
        ]);

        return redirect()->route('admin.transaksi')->with('success', 'Data transaksi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $branchId    = Auth::user()->branch_id;
        $transaction = SalesModel::where('branch_id', $branchId)->findOrFail($id);
        $transaction->delete();

        return redirect()->route('admin.transaksi')->with('success', 'Data transaksi berhasil dihapus!');
    }

    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:10240',
        ]);

        $file   = $request->file('csv_file');
        $handle = fopen($file->getPathname(), 'r');
        $header = fgetcsv($handle, 1000, ',');

        if (!$header) {
            return redirect()->back()->withErrors('File CSV kosong atau format tidak sesuai.');
        }

        $user     = Auth::user();
        $branchId = $user->branch_id;

        // Ambil nama toko sekali di luar loop
        $branch   = Branch::where('branch_id', $branchId)->first();
        $namaToko = $branch ? $branch->name : '-';

        $records = [];

        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            if (count($header) !== count($data)) continue;

            $row = array_combine($header, $data);

            $qty        = isset($row['quantity']) ? (int)$row['quantity'] : 1;
            $price      = isset($row['price']) ? (float)$row['price'] : 0;
            $totalSales = isset($row['total_sales']) ? (float)$row['total_sales'] : ($qty * $price);

            $invoiceDate = date('Y-m-d');
            if (!empty($row['invoice_date'])) {
                $invoiceDate = date('Y-m-d', strtotime(str_replace('/', '-', $row['invoice_date'])));
            }

            $records[] = [
                'branch_id'      => $branchId,
                'invoice_no'     => $row['invoice_no'] ?? ('I' . rand(100000, 999999)),
                'customer_id'    => $row['customer_id'] ?? ('C' . rand(100000, 999999)),
                'gender'         => $row['gender'] ?? 'Female',
                'age'            => isset($row['age']) ? (int)$row['age'] : 25,
                'category'       => $row['category'] ?? 'Lainnya',
                'quantity'       => $qty,
                'price'          => $price,
                'payment_method' => $row['payment_method'] ?? 'Cash',
                'invoice_date'   => $invoiceDate,
                // Pakai nama dari CSV kalau ada, fallback ke nama toko dari branches
                'shopping_mall'  => !empty($row['shopping_mall']) ? $row['shopping_mall'] : $namaToko,
                'total_sales'    => $totalSales,
                'created_at'     => now(),
                'updated_at'     => now(),
            ];
        }

        fclose($handle);

        foreach (array_chunk($records, 500) as $chunk) {
            SalesModel::insert($chunk);
        }

        return redirect()->back()->with('success', count($records) . ' Data transaksi berhasil di-import dari CSV!');
    }
}