<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salesight - Monitor Your Sales Performance</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#FAFAFC] text-[#1E293B] antialiased scroll-smooth">

    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-md shadow-blue-100 group-hover:bg-blue-700 transition">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13h1v7c0 .552.448 1 1 1h2c.552 0 1-.448 1-1v-7h1m-6 0V7a1 1 0 011-1h2a1 1 0 011 1v6m-4 0h4m2 0h1v4c0 .552.448 1 1 1h2c.552 0 1-.448 1-1v-4h1m-6 0V5a1 1 0 011-1h2a1 1 0 011 1v8m-4 0h4m2 0h1v2c0 .552.448 1 1 1h2c.552 0 1-.448 1-1v-2h1m-6 0V11a1 1 0 011-1h2a1 1 0 011 1v2m-4 0h4"></path>
                    </svg>
                </div>
                <span class="text-xl font-extrabold text-[#0B132B] tracking-tight">
                    Salesight
                </span>
            </a>
            
            <div class="hidden md:flex items-center space-x-8 font-semibold text-sm text-slate-500">
                <a href="#" class="text-slate-800 hover:text-blue-600 transition">Home</a>
                <a href="#fitur" class="hover:text-blue-600 transition">Features</a>
                <a href="#workflow" class="hover:text-blue-600 transition">How It Works</a>
            </div>

            <div>
                <a href="#mulai" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold px-6 py-3 rounded-xl transition shadow-lg shadow-blue-100 inline-block cursor-pointer">
                    Get Started
                </a>
            </div>

        </div>
    </nav>

    <header class="max-w-6xl mx-auto px-6 pt-12 pb-24 grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <span class="text-xs font-semibold uppercase bg-blue-50 text-blue-600 px-3 py-1.5 rounded-full inline-block">
                ⚡ Trend Sales No.1 Integration
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight text-slate-900">
                Monitor Your Sales Performance in <span class="text-blue-600">Real-Time</span>
            </h1>
            <p class="text-slate-500 text-base leading-relaxed max-w-md">
                Kelola strategi penjualan anda secara teratur dan dapatkan rangkuman grafik penjualan produk terlaris secara akurat.
            </p>
            <div class="flex items-center gap-4 pt-2">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-xl transition shadow-lg shadow-blue-200 cursor-pointer">
                    Get Started →
                </button>
                <button class="border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 font-semibold px-6 py-3 rounded-xl transition cursor-pointer">
                    View Demo
                </button>
            </div>
        </div>

        <div class="relative flex justify-center md:justify-end">
            <div class="bg-white p-6 rounded-2xl shadow-2xl border border-slate-100 w-full max-w-sm">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-xs text-slate-400">Overview Februari 2026</span>
                    <span class="text-xs text-green-500 font-medium bg-green-50 px-2 py-0.5 rounded">+12.4%</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Rp45.280.000</h3>
                
                <div class="h-12 w-full bg-gradient-to-t from-blue-50 to-transparent rounded-lg flex items-end mb-6 overflow-hidden">
                    <svg class="w-full text-blue-500" viewBox="0 0 100 20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M0 15 Q25 5, 50 12 T100 2" />
                    </svg>
                </div>

                <div class="space-y-3 text-xs">
                    <div class="flex justify-between"><span class="text-slate-500">🛒 Total Transaksi</span><span class="font-semibold">1.240</span></div>
                    <div class="flex justify-between"><span class="text-slate-500">📦 Terjual</span><span class="font-semibold">840 Pcs</span></div>
                    <div class="flex justify-between"><span class="text-slate-500">⭐ Produk Terbanyak</span><span class="font-semibold text-blue-600">Hijab Instan</span></div>
                </div>
            </div>
        </div>
    </header>

    <section class="max-w-6xl mx-auto px-6 py-16 text-center">
        <span class="text-xs font-semibold text-red-500 bg-red-50 px-3 py-1 rounded-full uppercase tracking-wider">Masalah Yang Sering Terjadi</span>
        <h2 class="text-2xl md:text-3xl font-bold mt-4 mb-3 text-slate-900">Kesulitan mengelola data penjualan?</h2>
        <p class="text-slate-500 text-sm max-w-xl mx-auto mb-12">Banyak hambatan yang terjadi di lapangan akibat data penjualan tidak terintegrasi dengan baik.</p>

        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 text-left">
            @php
                $problems = [
                    ['icon' => '📊', 'title' => 'Data Tidak Terstruktur', 'desc' => 'Laporan penjualan berantakan & sulit dibaca membuat evaluasi bulanan menjadi lambat.'],
                    ['icon' => '⏳', 'title' => 'Laporan Lambat Diupdate', 'desc' => 'Update data yang masih manual memakan waktu yang sangat lama dan melelahkan.'],
                    ['icon' => '📉', 'title' => 'Salah Estimasi Stok', 'desc' => 'Stok produk sering habis tiba-tiba karena tidak ada prediksi otomatis.'],
                    ['icon' => '📱', 'title' => 'Tidak Real-Time', 'desc' => 'Keputusan bisnis tertunda karena data penjualan telat diterima manajemen.']
                ];
            @endphp
            @foreach($problems as $p)
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
                <div class="text-2xl mb-4 bg-slate-50 w-10 h-10 flex items-center justify-center rounded-xl">{{ $p['icon'] }}</div>
                <h4 class="font-bold text-slate-900 mb-2 text-sm">{{ $p['title'] }}</h4>
                <p class="text-slate-500 text-xs leading-relaxed">{{ $p['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <section id="fitur" class="max-w-6xl mx-auto px-6 py-16 text-center">
        <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full uppercase tracking-wider">Our Solution</span>
        <h2 class="text-2xl md:text-3xl font-bold mt-4 mb-3 text-slate-900">Solusi cerdas untuk analisis penjualan</h2>
        <p class="text-slate-500 text-sm max-w-xl mx-auto mb-12">Seluruh fitur dirancang untuk mempermudah pemantauan penjualan dalam satu platform terintegrasi.</p>

        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 text-left">
            @php
                $features = [
                    ['bg' => 'bg-blue-600', 'text' => 'text-white', 'title' => 'Real Data Update', 'desc' => 'Akses data secara berkala dan tepat waktu tanpa hambatan.'],
                    ['bg' => 'bg-white', 'text' => 'text-slate-900', 'title' => 'Dashboard Otomatis', 'desc' => 'Grafik interaktif yang berubah otomatis sesuai transaksi masuk.'],
                    ['bg' => 'bg-white', 'text' => 'text-slate-900', 'title' => 'Prediksi Stok Analitis', 'desc' => 'Ketahui kapan waktu terbaik menambah stok barang anda.'],
                    ['bg' => 'bg-white', 'text' => 'text-slate-900', 'title' => 'Business Insights', 'desc' => 'Rekomendasi taktis untuk menaikkan omset penjualan.']
                ];
            @endphp
            @foreach($features as $f)
            <div class="{{ $f['bg'] }} {{ $f['bg'] == 'bg-white' ? 'border border-slate-100 shadow-sm' : 'shadow-lg shadow-blue-100' }} p-6 rounded-2xl transition">
                <div class="w-8 h-8 rounded-lg mb-4 flex items-center justify-center font-bold {{ $f['bg'] == 'bg-blue-600' ? 'bg-blue-500 text-white' : 'bg-blue-50 text-blue-600' }}">✓</div>
                <h4 class="font-bold mb-2 text-sm {{ $f['text'] }}">{{ $f['title'] }}</h4>
                <p class="text-xs leading-relaxed {{ $f['bg'] == 'bg-blue-600' ? 'text-blue-100' : 'text-slate-500' }}">{{ $f['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <section id="workflow" class="bg-blue-50/50 py-20 border-y border-slate-100">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider">Workflow</span>
            <h2 class="text-2xl md:text-3xl font-bold mt-4 mb-3 text-slate-900">Bagaimana Salesight Bekerja?</h2>
            <p class="text-slate-500 text-sm max-w-xl mx-auto mb-12">Tiga langkah mudah untuk memaksimalkan sistem analisis bisnis.</p>

            <div class="grid md:grid-cols-3 gap-8 relative">
                <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm text-center relative">
                    <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mx-auto mb-4 shadow-md">1</div>
                    <h4 class="font-bold text-slate-900 mb-2 text-sm">Input Data Transaksi</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">Masukkan data penjualan bulanan atau integrasikan API toko online.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm text-center relative">
                    <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mx-auto mb-4 shadow-md">2</div>
                    <h4 class="font-bold text-slate-900 mb-2 text-sm">Sistem Mengolah Data</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">AI kami menyusun tren, menghitung rasio, serta merapikan ke database.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm text-center relative">
                    <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mx-auto mb-4 shadow-md">3</div>
                    <h4 class="font-bold text-slate-900 mb-2 text-sm">Dashboard Ditampilkan</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">Selesai! Grafik visual siap dianalisis untuk pengambilan keputusan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#0B132B] text-white py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <span class="text-xs font-semibold text-blue-400 bg-blue-950 px-3 py-1 rounded-full uppercase tracking-wider">Preview Dashboard</span>
            <h2 class="text-2xl md:text-3xl font-bold mt-4 mb-3">Lihat Dashboard Secara Langsung</h2>
            <p class="text-slate-400 text-sm max-w-xl mx-auto mb-12">Visualisasi bersih yang membuat pemantauan omset harian menjadi lebih nyaman.</p>

            <div class="bg-white text-slate-800 p-6 rounded-2xl shadow-2xl border border-slate-800 text-left">
                <div class="flex justify-between items-center border-b border-slate-100 pb-4 mb-6">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-400"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        <span class="text-xs font-bold text-slate-700 ml-2">📊 Dashboard Penjualan</span>
                    </div>
                    <span class="text-xs text-slate-400">Mei 2026</span>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-100"><p class="text-[10px] text-slate-400">Total Omset</p><p class="text-sm font-bold text-slate-900">Rp45.200.000</p></div>
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-100"><p class="text-[10px] text-slate-400">Transaksi</p><p class="text-sm font-bold text-slate-900">1.240</p></div>
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-100"><p class="text-[10px] text-slate-400">Produk Aktif</p><p class="text-sm font-bold text-slate-900">32</p></div>
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-100"><p class="text-[10px] text-slate-400">Rasio Sukses</p><p class="text-sm font-bold text-green-600">98.4%</p></div>
                </div>

                <div class="h-32 flex items-end gap-3 px-2 pt-4 bg-slate-50/50 rounded-xl border border-slate-100">
                    <div class="w-full bg-blue-200 h-[30%] rounded-t-md"></div>
                    <div class="w-full bg-blue-300 h-[45%] rounded-t-md"></div>
                    <div class="w-full bg-blue-400 h-[60%] rounded-t-md"></div>
                    <div class="w-full bg-blue-600 h-[85%] rounded-t-md"></div>
                    <div class="w-full bg-blue-500 h-[50%] rounded-t-md"></div>
                    <div class="w-full bg-blue-700 h-[95%] rounded-t-md"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="mulai" class="bg-blue-600 text-white py-16 text-center">
        <div class="max-w-2xl mx-auto px-6 space-y-6">
            <h2 class="text-3xl font-extrabold tracking-tight">Mulai analisis penjualanmu sekarang</h2>
            <p class="text-blue-100 text-sm leading-relaxed">Dapatkan semua kemudahan analisis data produk dalam satu genggaman platform. Tanpa repot, tanpa penundaan data.</p>
            <div class="pt-2">
                <button class="bg-white hover:bg-blue-5 text-blue-600 font-bold px-8 py-3.5 rounded-xl shadow-lg transition cursor-pointer">
                    Get Started Now
                </button>
            </div>
        </div>
    </section>

    <footer class="bg-[#0B132B] text-slate-400 py-12 text-center text-xs border-t border-slate-900">
        <div class="max-w-6xl mx-auto px-6 space-y-4">
            <div class="font-bold text-white text-base">🔷 Salesight</div>
            <div class="flex justify-center space-x-6 text-slate-500">
                <a href="#" class="hover:text-white transition">Fitur</a>
                <a href="#" class="hover:text-white transition">Harga</a>
                <a href="#" class="hover:text-white transition">Kontak</a>
                <a href="#" class="hover:text-white transition">Login</a>
            </div>
            <p class="text-slate-600 pt-4">&copy; {{ date('Y') }} Salesight. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>