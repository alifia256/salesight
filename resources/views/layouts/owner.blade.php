<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salesight Owner</title>

    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owner-sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owner-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owner-tren-global.css?v=2') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tren-penjualan-toko.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owner-kontribusi-toko.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owner-kelola-cabang.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owner-daftar-toko.css') }}">
    
    <style>
        /* CSS Khusus Layout & Tombol Hamburger */
        .layout-wrapper {
            display: flex;
            width: 100%;
        }
        .main-content {
            flex: 1;
            min-width: 0; /* Mencegah konten meluber ke samping */
        }
        
        /* Tombol Hamburger Tampil di HP, Hilang di Laptop */
        .mobile-header {
            display: none;
            padding: 16px 20px;
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .hamburger-btn {
            background: transparent;
            border: none;
            padding: 4px;
            cursor: pointer;
            color: #0f172a;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 992px) {
            .mobile-header {
                display: flex; /* Memunculkan header di Tablet & HP */
            }
        }
    </style>
</head>
<body>
    <div class="layout-wrapper">
        
        @include('sidebar.owner-sidebar')
        
        <div class="main-content">
            
            <div class="mobile-header">
                <button id="btnToggleSidebar" class="hamburger-btn">
                    <i data-lucide="menu" style="width: 28px; height: 28px;"></i>
                </button>
            </div>
            
            <main>
                @yield('content')
            </main>
        </div>

    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Render semua icon lucide
        lucide.createIcons();

        // ===== SCRIPT BUKA TUTUP SIDEBAR DI HP =====
        const btnToggle = document.getElementById('btnToggleSidebar');
        const sidebar = document.querySelector('.sidebar-container');

        if(btnToggle && sidebar) {
            btnToggle.addEventListener('click', function() {
                // Menambahkan/menghapus class 'open' yang memicu animasi CSS sidebar
                sidebar.classList.toggle('open');
            });
        }
    </script>
    
    @yield('scripts')
</body>
</html>