@extends('layouts.owner')

@section('content')

<div class="dashboard-content">

    <div class="dashboard-overview-section">

        <!-- Header -->
        <div class="dashboard-sec-header">

            <div class="dashboard-title-group">
                <div class="dashboard-heading">
                    <div class="dashboard-title">
                        Dashboard Overview
                    </div>
                </div>

                <div class="dashboard-subtitle-wrapper">
                    <div class="dashboard-subtitle">
                        Ringkasan performa bisnis multi-cabang
                    </div>
                </div>
            </div>

        </div>

        <!-- Cards -->
        <div class="dashboard-cards">

            <div class="dashboard-card">
                <div class="dashboard-card-top">

                    <div class="dashboard-card-text">
                        Total Penjualan (Tahun)
                    </div>

                    <div class="dashboard-card-icon">
                        <img src="{{ asset('img/Container1.png') }}" alt="">
                    </div>

                </div>
            </div>

            <div class="dashboard-card">
                <div class="dashboard-card-top">

                    <div class="dashboard-card-text">
                        Total Transaksi
                    </div>

                    <div class="dashboard-card-icon green">
                        <img src="{{ asset('img/Container2.png') }}" alt="">
                    </div>

                </div>
            </div>

            <div class="dashboard-card">
                <div class="dashboard-card-top">

                    <div class="dashboard-card-text">
                        Total Cabang
                    </div>

                    <div class="dashboard-card-icon">
                        <img src="{{ asset('img/Container3.png') }}" alt="">
                    </div>

                </div>
            </div>

            <div class="dashboard-card">
                <div class="dashboard-card-top">

                    <div class="dashboard-card-text">
                        Rata-rata Penjualan Harian
                    </div>

                    <div class="dashboard-card-icon purple">
                        <img src="{{ asset('img/Container4.png') }}" alt="">
                    </div>

                </div>
            </div>

        </div>

        <!-- Statistik -->
        <div class="dashboard-stats">

            <div class="dashboard-small-card">
                <div class="dashboard-small-title">
                    Omset Bulan Ini
                </div>
            </div>

            <div class="dashboard-small-card">
                <div class="dashboard-small-title">
                    Omset Tahun Ini
                </div>
            </div>

            <div class="dashboard-small-card">
                <div class="dashboard-small-title">
                    Rata-rata per Transaksi
                </div>
            </div>

        </div>

        <!-- Chart -->
        <div class="dashboard-chart-card">

            <div class="dashboard-chart-header">

                <div>
                    <div class="dashboard-chart-title">
                        Grafik Penjualan
                    </div>

                    <div class="dashboard-chart-subtitle">
                        Total penjualan semua cabang
                    </div>
                </div>

                <div class="dashboard-filter">

                    <button class="dashboard-filter-btn">
                        Mingguan
                    </button>

                    <button class="dashboard-filter-btn active">
                        Bulanan
                    </button>

                    <button class="dashboard-filter-btn">
                        Tahunan
                    </button>

                </div>

            </div>

            <div class="dashboard-chart-placeholder">

            </div>

        </div>

    </div>

</div>

<script>
    const filterButtons = document.querySelectorAll('.dashboard-filter-btn');

    filterButtons.forEach(button => {

        button.addEventListener('click', () => {

            // hapus active dari semua tombol
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            // tambahkan active ke tombol yang diklik
            button.classList.add('active');

        });

    });
</script>

@endsection