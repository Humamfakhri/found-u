<nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/logo.png" alt="" class="img-fluid" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto gap-3 align-items-center">
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('') ? 'active' : '' }}" href="/">Beranda</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('kehilangan') ? 'active' : '' }}" href="/kehilangan">Kehilangan</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('ditemukan') ? 'active' : '' }}" href="/ditemukan">Ditemukan</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a>
                <a class="nav-link rounded-pill py-1 px-3" href="/login"><button
                        class="btn btn-outline-primary py-1 rounded-pill px-3">Login</button></a>
            </div>
        </div>
    </div>
</nav>
