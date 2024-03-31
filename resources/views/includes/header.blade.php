<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/logo-white.svg" alt="" class="img-fluid" width="110">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav gap-3 align-items-center justify-content-between w-100">
                <div class="flex-fill px-4">
                    <form class="w-100 position-relative" method="GET" action="{{ route('beranda') }}">
                    <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" class="form-control rounded-pill py-1 pe-3" name="search"
                            placeholder="Cari">
                        <button hidden type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('beranda') ? 'active' : '' }}"
                        href="/">Beranda</a>
                    <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('ditemukan') ? 'active' : '' }}"
                        href="/ditemukan">Ditemukan</a>
                    <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('kehilangan') ? 'active' : '' }}"
                        href="/kehilangan">Kehilangan</a>
                    <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('tentang') ? 'active' : '' }}"
                        href="/tentang">Tentang</a>
                    @auth
                        <div class="dropdown">
                            <button class="btn btn-sm rounded-pill px-1 dropdown-toggle border-0" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/img/rigel.jpg" alt="Rigel" class="img-fluid rounded-circle" width="30">
                                {{-- <i class="fa-solid fa-user"></i> --}}
                                {{-- <i class="fa-solid fa-caret-down"></i> --}}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end rounded-4 mt-1 border shadow px-4 py-3">
                                <img src="img/rigel.jpg" alt="Rigel"
                                    class="d-block mx-auto text-center img-fluid rounded-circle" width="100">
                                <p class="text-center mb-0 mt-2 fw-bold small">{{ Auth::user()->nama_akun }}</p>
                                <p class="text-center mb-0 small">6706220112</p>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="py-1"><a href="#" class="small"><i
                                            class='me-1 fa-solid fa-layer-group'></i> Postingan saya</a></li>
                                <li class="py-1"><a href="{{ route('logout') }}" class="small"><i
                                            class='me-1 fa-solid fa-arrow-right-from-bracket fa-flip-horizontal'></i>
                                        Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <a class="nav-link rounded-pill py-1 px-3" href="/login"><button
                                class="login-btn btn btn-outline-white py-1 rounded-pill px-3">Login</button></a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
