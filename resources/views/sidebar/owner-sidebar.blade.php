<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="container-wrapper">
                <div class="div">
                    <div class="icon-wrapper">
                        <div class="icon">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo">
                        </div>
                    </div>
                    <div class="div-2">
                        <div class="div-wrapper">
                            <div class="text-wrapper">Salesight</div>
                        </div>
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-2">Owner Panel</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-3">
                <div class="paragraph">
                    <div class="navigasi">NAVIGASI</div>
                </div>
                <!-- Dashboard -->
                <a href="{{ route('owner.dashboard') }}"
                    class="{{ request()->routeIs('owner.dashboard') ? 'button' : 'button-2' }}">

                    <img class="menu-icon" src="{{ asset('img/dashboard.png') }}" />

                    <div class="text-2">
                        <div class="text-wrapper-3">
                            Dashboard
                        </div>
                    </div>

                    <div class="div-4"></div>

                </a>

                <!-- Tren Penjualan Global -->
                <a href="{{ route('owner.tren-global') }}"
                    class="{{ request()->routeIs('owner.tren-global') ? 'button' : 'button-2' }}">

                    <div class="text-3">
                        <div class="icon-2">
                            <img class="menu-icon" src="{{ asset('img/pglobal.png') }}" />
                        </div>
                    </div>

                    <div class="text-4">
                        <div class="text-wrapper-4">
                            Tren Penjualan Global
                        </div>
                    </div>

                </a>

                <!-- Tren Penjualan Toko -->
                <a href="#" class="button-2">

                    <div class="text-3">
                        <div class="icon-2">
                            <img class="menu-icon" src="{{ asset('img/ptoko.png') }}" />
                        </div>
                    </div>

                    <div class="text-4">
                        <div class="text-wrapper-5">
                            Tren Penjualan Toko
                        </div>
                    </div>

                </a>

                <!-- Kontribusi Toko -->
                <a href="#" class="button-2">

                    <div class="text-3">
                        <div class="icon-2">
                            <img class="menu-icon" src="{{ asset('img/kontribusitoko.png') }}" />
                        </div>
                    </div>

                    <div class="text-4">
                        <div class="text-wrapper-6">
                            Kontribusi Toko
                        </div>
                    </div>

                </a>

                <!-- Kelola Cabang -->
                <a href="#" class="button-2">

                    <img class="menu-icon" src="{{ asset('img/kelolacabang.png') }}" />

                    <div class="text-4">
                        <div class="text-wrapper-7">
                            Kelola Cabang
                        </div>
                    </div>

                </a>

                <!-- Daftar Toko -->
                <a href="#" class="button-2">

                    <img class="menu-icon" src="{{ asset('img/daftartoko.png') }}" />

                    <div class="text-4">
                        <div class="text-wrapper-8">
                            Daftar Toko
                        </div>
                    </div>

                </a>
            </div>
            <div class="div-5">
                <div class="div-6">
                    <div class="div-wrapper-3">
                        <div class="text-wrapper-9">Owner Mode</div>
                    </div>
                    <div class="div-wrapper-2">
                        <div class="text-wrapper-10">Multi-branch analytics</div>
                    </div>
                </div>
                <div class="button-3">
                    <div class="icon-3"><img class="vector-8" src="{{ asset('img/logout.png') }}" />
                        <img class="vector-4" src="" />
                        <img class="vector-9" src="" />
                    </div>
                    <div class="text-wrapper-11"> Keluar</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
