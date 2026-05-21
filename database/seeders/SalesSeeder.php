<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SalesSeeder extends Seeder
{
    public function run(): void
    {
        $filePath = database_path('data/customer_shopping_data_aftercleaning.csv');

        if (!file_exists($filePath)) {
            $this->command->error("File CSV tidak ditemukan di: " . $filePath);
            return;
        }

        // Kosongkan tabel sales sebelum import ulang
        DB::table('sales')->truncate();

        $file = fopen($filePath, 'r');

        // Lewati header CSV
        $header = fgetcsv($file);

        $batch = [];
        $batchSize = 1000;

        while (($row = fgetcsv($file)) !== false) {
            $batch[] = [
                'invoice_no' => $row[0],
                'customer_id' => $row[1],
                'gender' => $row[2],
                'age' => (int) $row[3],
                'category' => $row[4],
                'quantity' => (int) $row[5],
                'price' => (float) $row[6],
                'payment_method' => $row[7],
                'invoice_date' => $row[8],
                'shopping_mall' => $row[9],
                'total_sales' => (float) $row[10],
                'created_at' => now(),
                'updated_at' => now(),
            ];

            if (count($batch) >= $batchSize) {
                DB::table('sales')->insert($batch);
                $batch = [];
            }
        }

        if (!empty($batch)) {
            DB::table('sales')->insert($batch);
        }

        fclose($file);

        $this->command->info('Dataset sales berhasil diimport ke database.');
    }
}