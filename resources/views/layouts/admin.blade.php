<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salesight - Admin Panel</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-800 antialiased flex h-screen overflow-hidden">

    <aside id="sidebar" class="w-64 bg-white border-r border-slate-100 flex flex-col justify-between flex-shrink-0 h-screen fixed md:relative z-50 transform -translate-x-full md:translate-x-0 transition-transform duration-300">
        
        <div>
            <div class="h-24 flex items-center px-6 border-b border-slate-50 mb-4">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 bg-blue-600 rounded-[14px] shadow-lg shadow-blue-600/30 flex items-center justify-center text-white">
                        <i data-lucide="bar-chart-2" class="w-6 h-6"></i>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="text-[22px] font-extrabold tracking-tight text-slate-900 leading-none mb-1.5">Salesight</span>
                        <div class="flex">
                            <span class="bg-blue-50 text-blue-600 text-[10px] font-extrabold px-2 py-0.5 rounded-full uppercase tracking-wider">
                                ADMIN
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-5">
                <p class="text-xs font-bold text-slate-400 tracking-wider mb-4 px-2">NAVIGASI</p>
                
                <nav class="space-y-1.5">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center gap-3 px-3 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-blue-600 font-bold' : 'text-slate-500 hover:bg-slate-50 hover:text-slate-800 font-medium' }}">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                        <span class="text-sm">Dashboard</span>
                    </a>

                    <a href="{{ route('admin.transaksi') }}" 
                       class="flex items-center gap-3 px-3 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.transaksi') ? 'bg-blue-50 text-blue-600 font-bold' : 'text-slate-500 hover:bg-slate-50 hover:text-slate-800 font-medium' }}">
                        <i data-lucide="file-text" class="w-5 h-5"></i>
                        <span class="text-sm">Data Transaksi</span>
                    </a>

                    <a href="{{ route('admin.input') }}" 
                       class="flex items-center gap-3 px-3 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.input') ? 'bg-blue-50 text-blue-600 font-bold' : 'text-slate-500 hover:bg-slate-50 hover:text-slate-800 font-medium' }}">
                        <i data-lucide="file-plus-2" class="w-5 h-5"></i>
                        <span class="text-sm">Input Data</span>
                    </a>
                </nav>
            </div>
        </div>

        <div class="p-5 border-t border-slate-50">
            
            <div class="bg-blue-50/70 rounded-xl p-4 mb-4">
                <p class="text-sm font-bold text-blue-600 leading-tight">Admin Mode</p>
                <p class="text-[12px] text-slate-500 font-medium mt-0.5">Data entry & kelola transaksi</p>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf 
                <button type="submit" class="w-full flex items-center justify-center gap-2.5 px-4 py-2 text-sm font-bold text-slate-500 hover:text-slate-800 transition-colors">
                    <i data-lucide="log-out" class="w-4 h-4"></i> Keluar
                </button>
            </form>
        </div>
        
    </aside>

    <div id="sidebarOverlay" class="fixed inset-0 bg-slate-900/50 z-40 hidden md:hidden transition-opacity"></div>

    <main class="flex-1 overflow-y-auto w-full h-screen flex flex-col">
        
        <div class="md:hidden flex items-center justify-between bg-white border-b border-slate-200 px-5 py-4 shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-blue-600 rounded-[10px] shadow-sm flex items-center justify-center text-white">
                    <i data-lucide="bar-chart-2" class="w-5 h-5"></i>
                </div>
                <span class="text-lg font-extrabold text-slate-900 tracking-tight">Salesight</span>
            </div>
            <button id="btnToggleSidebar" class="p-2 -mr-2 text-slate-500 hover:bg-slate-100 rounded-lg transition-colors">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <div class="p-5 md:p-8 lg:p-10 flex-1">
            @yield('content')
        </div>
    </main>

    <script>
        // Render semua icon lucide
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // ===== SCRIPT BUKA TUTUP SIDEBAR KHUSUS MOBILE =====
        const btnToggle = document.getElementById('btnToggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        function toggleSidebar() {
            // Tailwind class toggle untuk menggeser sidebar
            sidebar.classList.toggle('-translate-x-full');
            // Menampilkan/menyembunyikan efek gelap background
            overlay.classList.toggle('hidden');
        }

        if(btnToggle) btnToggle.addEventListener('click', toggleSidebar);
        // Menutup sidebar jika area gelap (overlay) di klik
        if(overlay) overlay.addEventListener('click', toggleSidebar);
    </script>
</body>
</html>