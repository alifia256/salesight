@extends('layouts.admin')

@section('content')
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <h1 class="text-2xl font-extrabold text-slate-900 flex items-center gap-2">
            Selamat Datang, {{ Auth::user()->nama }} 👋
        </h1>
        <p class="text-sm text-slate-500 mt-1">Ringkasan data penjualan Anda - {{ date('d M Y') }}</p>
    </div>
    <a href="{{ route('admin.input') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center gap-2 shadow-sm transition-colors w-full md:w-auto">
        <i data-lucide="plus" class="w-4 h-4"></i> Tambah Data
    </a>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-8">
    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-xs font-semibold text-slate-400 mb-1">Total<br>Transaksi</p>
                <h3 class="text-2xl font-extrabold text-slate-800 mt-3">{{ number_format($totalTransaksi, 0, ',', '.') }}</h3>
                <p class="text-[11px] text-slate-400 mt-1">data tersimpan</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                <i data-lucide="clipboard-list" class="w-4 h-4"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-xs font-semibold text-slate-400 mb-1">Total<br>Pendapatan</p>
                <h3 class="text-2xl font-extrabold text-slate-800 mt-3">Rp{{ number_format($totalPendapatan, 0, ',', '.') }}</h3>
                <p class="text-[11px] text-slate-400 mt-1">keseluruhan</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center text-green-600 shrink-0">
                <i data-lucide="dollar-sign" class="w-4 h-4"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-xs font-semibold text-slate-400 mb-1">Total Qty<br>Terjual</p>
                <h3 class="text-2xl font-extrabold text-slate-800 mt-3">{{ number_format($totalQty, 0, ',', '.') }}</h3>
                <p class="text-[11px] text-slate-400 mt-1">unit / pcs</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-orange-50 flex items-center justify-center text-orange-500 shrink-0">
                <i data-lucide="package" class="w-4 h-4"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-xs font-semibold text-slate-400 mb-1">Rata-rata /<br>Transaksi</p>
                <h3 class="text-2xl font-extrabold text-slate-800 mt-3">Rp{{ number_format($rataRata, 0, ',', '.') }}</h3>
                <p class="text-[11px] text-slate-400 mt-1">per transaksi</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-purple-50 flex items-center justify-center text-purple-600 shrink-0">
                <i data-lucide="trending-up" class="w-4 h-4"></i>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <div class="lg:col-span-2 bg-white rounded-xl p-4 md:p-6 border border-slate-200 shadow-sm flex flex-col overflow-x-auto">
        <div class="mb-6">
            <h2 class="text-base font-bold text-slate-800">Top 5 Produk</h2>
            <p class="text-xs text-slate-400 mt-1">Berdasarkan total pendapatan</p>
        </div>
        
        <div class="flex-1 min-w-[400px] flex items-end gap-2 md:gap-6 pt-4 relative">
            <div class="absolute inset-0 flex flex-col justify-between pointer-events-none pb-6 pl-10">
                <div class="border-b border-dashed border-slate-200 w-full"></div>
                <div class="border-b border-dashed border-slate-200 w-full"></div>
                <div class="border-b border-dashed border-slate-200 w-full"></div>
                <div class="border-b border-slate-200 w-full"></div>
            </div>

            <div class="w-full h-[200px] md:h-full flex justify-around items-end pl-12 pb-6 relative z-10">
                @foreach($topProduk as $item)
                    @php
                        $heightPercent = ($item->total_revenue / $maxRevenue) * 100;
                        $heightPercent = $heightPercent < 5 ? 5 : $heightPercent; 
                    @endphp
                    
                    <div class="w-10 md:w-16 bg-blue-600 rounded-t-lg hover:bg-blue-700 transition-all cursor-pointer relative group" style="height: {{ $heightPercent }}%;">
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-20 pointer-events-none">
                            Rp{{ number_format($item->total_revenue, 0, ',', '.') }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="min-w-[400px] flex justify-around items-start pl-12 pt-3 h-10">
            @foreach($topProduk as $item)
                <span class="text-[9px] md:text-[10px] font-semibold text-slate-400 w-10 md:w-16 text-center line-clamp-2 leading-tight">
                    {{ Str::title(str_replace('_', ' ', $item->category)) }}
                </span>
            @endforeach
        </div>
    </div>

    <div class="lg:col-span-1 bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden flex flex-col h-full min-h-[300px]">
        <div class="p-4 md:p-5 border-b border-slate-100 bg-white flex justify-between items-center shrink-0">
            <div>
                <h2 class="text-base font-bold text-slate-800">Transaksi Terbaru</h2>
                <p class="text-xs text-slate-400 mt-1">5 entri terakhir</p>
            </div>
        </div>
        
        <div class="flex-1 overflow-y-auto">
            @forelse($transaksiTerbaru as $transaksi)
                <div class="p-4 border-b border-slate-50 hover:bg-slate-50 transition-colors flex justify-between items-center gap-2">
                    <div class="min-w-0 flex-1">
                        <h4 class="text-sm font-bold text-slate-800 truncate">{{ Str::title(str_replace('_', ' ', $transaksi->category)) }}</h4>
                        <p class="text-[11px] text-slate-400 mt-0.5 truncate">
                            {{ date('d M Y', strtotime($transaksi->invoice_date)) }} &middot; {{ $transaksi->quantity }} pcs
                        </p>
                    </div>
                    <div class="text-sm font-bold text-slate-900 shrink-0">
                        Rp{{ number_format($transaksi->total_sales, 0, ',', '.') }}
                    </div>
                </div>
            @empty
                <div class="p-8 text-center flex flex-col items-center justify-center h-full">
                    <div class="w-12 h-12 bg-slate-50 rounded-full flex items-center justify-center text-slate-300 mb-3 shrink-0">
                        <i data-lucide="inbox" class="w-5 h-5"></i>
                    </div>
                    <p class="text-sm font-medium text-slate-500">Belum ada transaksi</p>
                </div>
            @endforelse
        </div>
    </div>

</div>
@endsection