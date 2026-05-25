<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Salesight</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>

<div class="body">

    <div class="login-page">

        <!-- LEFT PANEL -->
        <div class="left-panel">

            <!-- decorative -->
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>

            <!-- grid dots -->
            <div class="grid-dots"></div>

            <div class="left-content">

                <!-- LOGO -->
                <div class="logo-section">
                    <div class="logo-box">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-image">
                    </div>
                    <div class="logo-text">
                        Salesight
                    </div>
                </div>

                <!-- HERO -->
                <div class="hero-content">
                    <h1>Selamat Datang di Salesight</h1>
                    <p>
                        Pantau performa bisnis, analisis penjualan, dan kelola seluruh cabang secara real-time dengan dashboard modern dan intuitif.
                    </p>
                </div>

                <!-- CHART CARD -->
                <div class="chart-card">
                    <div class="card-header">
                        <span>Pendapatan Bulanan</span>
                        <div class="growth">+18.4%</div>
                    </div>

                    <!-- ANIMATED CHART -->
                    <div class="chart-animation">
                        <svg viewBox="0 0 400 140" class="animated-chart">
                            <defs>
                                <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#93c5fd"/>
                                    <stop offset="100%" stop-color="#ffffff"/>
                                </linearGradient>
                            </defs>

                            <!-- area -->
                            <path class="chart-area" d="
                                M0 120
                                C40 100, 60 80, 100 90
                                S160 130, 200 95
                                S260 40, 300 70
                                S360 120, 400 40
                                L400 140
                                L0 140
                                Z
                            "/>

                            <!-- line -->
                            <path class="chart-line" d="
                                M0 120
                                C40 100, 60 80, 100 90
                                S160 130, 200 95
                                S260 40, 300 70
                                S360 120, 400 40
                            "/>
                        </svg>
                    </div>
                </div>

                <!-- STATS -->
                <div class="stats-list">
                    <div class="stats-item">
                        <div>
                            <small>TOTAL PENDAPATAN</small>
                            <h3>Rp45.280.000</h3>
                        </div>
                        <div class="stats-growth">+12.5%</div>
                    </div>

                    <div class="stats-item">
                        <div>
                            <small>TOTAL TRANSAKSI</small>
                            <h3>1.240</h3>
                        </div>
                        <div class="stats-growth">+8.3%</div>
                    </div>

                    <div class="stats-item">
                        <div>
                            <small>RATA-RATA / TRANSAKSI</small>
                            <h3>Rp36.516</h3>
                        </div>
                        <div class="stats-growth">+5.2%</div>
                    </div>
                </div>

            </div>

        </div>

        <!-- RIGHT PANEL -->
        <div class="right-panel">

            <div class="login-card">

                <!-- HEADER -->
                <div class="card-header-top">
                    <div class="secure-badge">
                        <i data-lucide="shield-check" class="secure-icon"></i>
                        <span>Secure Login</span>
                    </div>

                    <h2>Login ke Akun Anda</h2>
                    <p>Masukkan email dan password Anda untuk mengakses dashboard Salesight.</p>
                </div>

                <!-- ERROR -->
                @if ($errors->any())
                    <div class="alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- FORM -->
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf

                    <!-- EMAIL -->
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-wrapper">
                            <i data-lucide="mail" class="input-icon"></i>
                            <input
                                type="email"
                                name="email"
                                placeholder="nama@perusahaan.com"
                                value="{{ old('email') }}"
                                required
                            >
                        </div>
                    </div>

                    <!-- PASSWORD -->
                    <div class="form-group">
                        <div class="password-label">
                            <label>Password</label>
                            <a href="#">Lupa Password?</a>
                        </div>
                        <div class="input-wrapper password-wrapper">
                            <i data-lucide="lock-keyhole" class="input-icon"></i>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Masukkan password Anda"
                                required
                            >
                            <button type="button" class="toggle-password" onclick="togglePassword(this)">
                                <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit" class="login-button">
                        <span>Login Sekarang</span>
                        <i data-lucide="arrow-right" class="btn-arrow"></i>
                    </button>

                </form>

                <!-- SEPARATOR -->
                <div class="separator">
                    <div class="line"></div>
                    <span>atau</span>
                    <div class="line"></div>
                </div>

                <!-- REGISTER -->
                <div class="register-link">
                    Belum punya akun?
                    <a href="{{ route('register') }}">Daftar Sekarang</a>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- LUCIDE -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
<script>
    lucide.createIcons();

    function togglePassword(btn) {
        const input = document.getElementById('password');
        const isHidden = input.type === 'password';
        
        input.type = isHidden ? 'text' : 'password';
        btn.querySelector('.eye-icon').style.opacity = isHidden ? '0.4' : '1';
    }
</script>

</body>
</html>