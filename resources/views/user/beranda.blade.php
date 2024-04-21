{{-- {{ dd(Request::segment(1)) }} --}}
@extends('layouts.default')
@section('head')
    <link href="{{ asset('css/beranda.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="hero align-items-center justify-content-center" id="hero">
        <img src="/img/hero-mobile.svg" alt="" class="d-md-none">
        <img src="/img/hero-md.svg" alt="" class="d-none d-md-block d-lg-none">
        <img src="/img/hero-1.svg" alt="" class="d-none d-lg-block">
    </section>

    @auth
        <div class="mobile-sidebar d-block d-lg-none rounded-3 px-2 py-3">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex align-items-center gap-2 px-3">
                    <div>
                        <img src="{{ Auth::user()->getImageURL() }}" alt="Foto Profil"
                            class="d-block mx-auto text-center img-fluid rounded-circle" width="50">
                    </div>
                    <div>
                        <p class="mb-0 fw-bold small nama_akun">{{ Auth::user()->nama_akun }}</p>
                        <p class="mb-0 small">{{ Auth::user()->nomor_induk }}</p>
                    </div>
                </div>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('beranda') ? 'active' : '' }}" href="/">Beranda</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('ditemukan') ? 'active' : '' }}"
                    href="/ditemukan">Ditemukan</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('kehilangan') ? 'active' : '' }}"
                    href="/kehilangan">Kehilangan</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('tentang') ? 'active' : '' }}"
                    href="/tentang">Tentang</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('notifikasi') ? 'active' : '' }}"
                    href="/notifikasi">Notifikasi</a>
                <div class="px-3">
                    <hr class="my-0">
                </div>
                <a href="/?filter=postingan_saya" class="nav-link py-1 px-3">Postingan saya</a>
                <a href="{{ route('logout') }}" class="nav-link py-1 px-3 text-primary">Logout</a>
            </div>
        </div>
    @else
        <div class="mobile-sidebar d-block d-lg-none rounded-3 px-2 py-3">
            <div class="d-flex flex-column gap-3">
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('beranda') ? 'active' : '' }}"
                    href="/">Beranda</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('ditemukan') ? 'active' : '' }}"
                    href="/ditemukan">Ditemukan</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('kehilangan') ? 'active' : '' }}"
                    href="/kehilangan">Kehilangan</a>
                <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('tentang') ? 'active' : '' }}"
                    href="/tentang">Tentang</a>
                {{-- <a class="nav-link rounded-pill py-1 px-3 {{ Route::is('notifikasi') ? 'active' : '' }}"
                href="/notifikasi">Notifikasi</a> --}}
                <div class="px-3">
                    <hr class="my-0">
                </div>
                <a class="nav-link rounded-pill py-1 px-3" href="/login"><button
                        class="login-btn btn btn-outline-primary py-0 rounded-pill px-3">Login</button></a>
            </div>
        </div>
    @endauth

    {{-- FILTER --}}
    @if ($postingans_ditemukan->count() || $postingans_kehilangan->count())
        <div class="container mt-4 mt-md-5">
            <div class="filter d-flex gap-4">
                @if (isset($_GET['filter']))
                    @if ($_GET['filter'] == 'postingan_saya')
                        <a href="/" class="btn btn-sm d-flex align-items-center btn-primary rounded-pill px-3">
                            Postingan Saya
                            {{-- <i class="ms-2 fa-solid fa-chevron-down"></i> --}}
                            <i class="ms-2 fa-solid fa-xmark"></i>
                        </a>
                    @else
                        <div class="dropdown">
                            <button
                                class="btn btn-sm d-flex align-items-center btn-outline-secondary rounded-pill px-3 dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ $filter }}
                                <i class="ms-2 fa-solid fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu rounded-4 py-0 rounded-pill">
                                <li class="rounded-pill">
                                    <a class="rounded-pill dropdown-item small"
                                        href="{{ $filter == 'Terbaru' ? '/?filter=terlama' : '/' }}">{{ $filter_list }}</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                @else
                    <div class="dropdown">
                        <button
                            class="btn btn-sm d-flex align-items-center btn-outline-secondary rounded-pill px-3 dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $filter }}
                            <i class="ms-2 fa-solid fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu rounded-4 py-0 rounded-pill">
                            <li class="rounded-pill">
                                <a class="rounded-pill dropdown-item small"
                                    href="{{ $filter == 'Terbaru' ? '/?filter=terlama' : '/' }}">{{ $filter_list }}</a>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    @else
        <div class="container mt-4 mt-md-5">
            <div class="text-center">
                <h5 class="fw-light text-center text-muted mt-5 pt-5">Tidak ada postingan</h5>
                <i class="fa-solid fa-inbox fs-1 mt-2"></i>
            </div>
        </div>
    @endif

    {{-- DALAM PENGAJUAN --}}
    @if ($postingans_diajukan->count())
        <section class="diajukan cards-container mt-5">
            <div class="container my-4">
                <div class="section-title mb-3">
                    <div class="line"></div>
                    <h2 class="mt-4 mb-0 mb-md-2">DALAM PENGAJUAN</h2>
                    <p class="lead m-0">Postingan Anda yang masih dalam pengajuan dan menunggu konfirmasi admin.</p>
                </div>
                <div class="row pt-2 g-3 g-md-4">
                    @foreach ($postingans_diajukan as $postingan_diajukan)
                        <div class="col-md-4 col-lg-3">
                            <div class="card h-100">
                                <div class="card-content h-100 d-flex flex-column">
                                    <p hidden class="kategori">kehilangan</p>
                                    <p hidden class="no_telp">{{ $postingan_diajukan->no_telp }}</p>
                                    <p hidden class="lokasi_kehilangan">
                                        {{ $postingan_diajukan->lokasi_kehilangan ? $postingan_diajukan->lokasi_kehilangan : null }}
                                    </p>
                                    <p hidden class="lokasi_ditemukan">
                                        {{ $postingan_diajukan->lokasi_ditemukan ? $postingan_diajukan->lokasi_ditemukan : null }}
                                    </p>
                                    <p hidden class="lokasi_disimpan">
                                        {{ $postingan_diajukan->lokasi_disimpan ? $postingan_diajukan->lokasi_disimpan : null }}
                                    </p>
                                    <p hidden class="tgl_kehilangan">
                                        {{ $postingan_diajukan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_diajukan->tgl_kehilangan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="tgl_ditemukan">
                                        {{ $postingan_diajukan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_diajukan->tgl_ditemukan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="no_telp">{{ $postingan_diajukan->no_telp }}</p>
                                    <p hidden class="tgl_ajukan_time">
                                        {{ Carbon\Carbon::parse($postingan_diajukan->created_at)->format('H:i') }}</p>
                                    <p hidden class="tgl_ajukan_date">
                                        {{ Carbon\Carbon::parse($postingan_diajukan->created_at)->translatedFormat('d F Y') }}
                                    </p>
                                    <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPostKehilangan">
                                        <img src="{{ $postingan_diajukan->getImageURL() }}" alt=""
                                            class="img-fluid foto_barang">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0 d-none d-md-block flex-fill">
                                        <p class="fs-18 fw-bold mb-0 judul_postingan">
                                            {{ $postingan_diajukan->judul_postingan }}</p>
                                        <p class="mb-2 deskripsi_postingan">
                                            {{ $postingan_diajukan->deskripsi_postingan }}</p>
                                        <p hidden class="small m-0 nama_akun">
                                            {{ $postingan_diajukan->akun->nama_akun }}</p>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <hr class="mb-2">
                                        <small
                                            class="muted small">{{ Carbon\Carbon::parse($postingan_diajukan->created_at)->translatedFormat('d F Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- DITEMUKAN --}}
    @if ($postingans_ditemukan->count())
        <section class="ditemukan cards-container mt-5">
            <div class="container mt-4 mb-5">
                <div class="section-title mb-lg-3">
                    <div class="line"></div>
                    <div class="d-md-flex justify-content-between align-items-center">
                        <di>
                            <h3 class="mt-3 fw-black mb-0">DITEMUKAN</h3>
                            <p class="fs-18 fw-light mb-0">Barang yang sudah ditemukan dan disimpan di fakultas tertentu.
                            </p>
                        </di>
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-between d-md-block mt-4">
                            @if ($jml_postingans_ditemukan > 4)
                                @if (isset($_GET['filter']))
                                    @if (!$_GET['filter'] == 'postingan_saya')
                                        <a href="/ditemukan"><button
                                                class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                                Semua</button></a>
                                    @endif
                                @else
                                    <a href="/ditemukan"><button
                                            class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                            Semua</button></a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row pt-2 g-3 g-md-4">
                    @foreach ($postingans_ditemukan as $postingan_ditemukan)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100">
                                <div class="card-content">
                                    <p hidden class="kategori">ditemukan</p>
                                    <p hidden class="lokasi_kehilangan">
                                        {{ $postingan_ditemukan->lokasi_kehilangan ? $postingan_ditemukan->lokasi_kehilangan : null }}
                                    </p>
                                    <p hidden class="lokasi_ditemukan">
                                        {{ $postingan_ditemukan->lokasi_ditemukan ? $postingan_ditemukan->lokasi_ditemukan : null }}
                                    </p>
                                    <p hidden class="lokasi_disimpan">
                                        {{ $postingan_ditemukan->lokasi_disimpan ? $postingan_ditemukan->lokasi_disimpan : null }}
                                    </p>
                                    <p hidden class="tgl_kehilangan">
                                        {{ $postingan_ditemukan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_ditemukan->tgl_kehilangan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="tgl_ditemukan">
                                        {{ $postingan_ditemukan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_ditemukan->tgl_ditemukan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="tgl_ditemukan">
                                        {{ Carbon\Carbon::parse($postingan_ditemukan->tgl_ditemukan)->translatedFormat('d F Y') }}
                                    </p>
                                    <p hidden class="no_telp">{{ $postingan_ditemukan->no_telp }}</p>
                                    <p hidden class="tgl_ajukan_time">
                                        {{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->format('H:i') }}</p>
                                    <p hidden class="tgl_ajukan_date">
                                        {{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->translatedFormat('d F Y') }}
                                    </p>
                                    <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPostDitemukan">
                                        <img src="{{ $postingan_ditemukan->getImageURL() }}" alt=""
                                            class="img-fluid foto_barang">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="fs-16-18 fw-bold mb-0 judul_postingan">
                                            {{ $postingan_ditemukan->judul_postingan }}</p>
                                        <p class="fs-14-16 mb-1 mb-lg-2 deskripsi_postingan">
                                            {{ $postingan_ditemukan->deskripsi_postingan }}</p>
                                        <div class="row" hidden>
                                            <div class="col-1">
                                                <i class="small fa-solid fa-user"></i>
                                            </div>
                                            <div class="col">
                                                <p class="small m-0 nama_akun">
                                                    {{ $postingan_ditemukan->akun->nama_akun }}</p>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="small fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="col">
                                                <p class="fs-10-14 m-0 lokasi_disimpan">
                                                    {{ $postingan_ditemukan->lokasi_disimpan ? $postingan_ditemukan->lokasi_disimpan : null }}
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-1">
                                        <small
                                            class="muted fs-10-14">{{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->translatedFormat('d F Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- KEHILANGAN --}}
    @if ($postingans_kehilangan->count())
        <section class="kehilangan cards-container mt-5">
            <div class="container my-4">
                <div class="section-title mb-3">
                    <div class="line"></div>
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mt-4 mb-0 mb-md-2">KEHILANGAN</h2>
                            <p class="lead m-0">Barang yang belum ditemukan.</p>
                        </div>
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-between d-md-block mt-4">
                            @if ($jml_postingans_kehilangan > 4)
                                @if (isset($_GET['filter']))
                                    @if (!$_GET['filter'] == 'postingan_saya')
                                        <a href="/kehilangan"><button
                                                class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                                Semua</button></a>
                                    @endif
                                @else
                                    <a href="/kehilangan"><button
                                            class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                            Semua</button></a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row pt-2 g-3 g-md-4">
                    @foreach ($postingans_kehilangan as $postingan_kehilangan)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100">
                                <div class="card-content h-100 d-flex flex-column">
                                    <p hidden class="kategori">kehilangan</p>
                                    <p hidden class="no_telp">{{ $postingan_kehilangan->no_telp }}</p>
                                    <p hidden class="lokasi_kehilangan">
                                        {{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : null }}
                                    </p>
                                    <p hidden class="lokasi_ditemukan">
                                        {{ $postingan_kehilangan->lokasi_ditemukan ? $postingan_kehilangan->lokasi_ditemukan : null }}
                                    </p>
                                    <p hidden class="lokasi_disimpan">
                                        {{ $postingan_kehilangan->lokasi_disimpan ? $postingan_kehilangan->lokasi_disimpan : null }}
                                    </p>
                                    <p hidden class="tgl_kehilangan">
                                        {{ $postingan_kehilangan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_kehilangan->tgl_kehilangan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="tgl_ditemukan">
                                        {{ $postingan_kehilangan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_kehilangan->tgl_ditemukan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="no_telp">{{ $postingan_kehilangan->no_telp }}</p>
                                    <p hidden class="tgl_ajukan_time">
                                        {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->format('H:i') }}</p>
                                    <p hidden class="tgl_ajukan_date">
                                        {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->translatedFormat('d F Y') }}
                                    </p>
                                    <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPostKehilangan">
                                        <img src="{{ $postingan_kehilangan->getImageURL() }}" alt=""
                                            class="img-fluid foto_barang">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0 d-md-block flex-fill">
                                        <p class="fs-16-18 fw-bold mb-0 judul_postingan">
                                            {{ $postingan_kehilangan->judul_postingan }}</p>
                                        <p class="fs-14-16 mb-1 deskripsi_postingan">
                                            {{ $postingan_kehilangan->deskripsi_postingan }}</p>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="small fa-solid fa-user"></i>
                                            </div>
                                            <div class="col">
                                                <p class="fs-10-14 m-0 nama_akun">
                                                    {{ $postingan_kehilangan->akun->nama_akun }}</p>
                                            </div>
                                        </div>
                                        {{-- <div class="row mt-1">
                                            <div class="col-1">
                                                <i class="small fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="col">
                                                <p class="small m-0 lokasi_kehilangan">
                                                    {{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : null }}
                                                </p>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="px-3 pb-3">
                                        <hr class="my-1">
                                        <small
                                            class="muted fs-10-14">{{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->translatedFormat('d F Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    {{-- Alert Success Login --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="/js/lihatPost.js"></script> --}}
    {{-- @if (Session::get('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "Login Berhasil"
            });
        </script>
    @endif --}}

    {{-- Alert Logout --}}
    @if (Session::get('logoutsuccess'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "bottom-start",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                // icon: "success",
                title: "Anda telah Logout"
            });
        </script>
    @endif

    {{-- Alert Sudah Login --}}
    @if (Session::get('alreadyLogin'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "bottom-start",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "warning",
                title: "Anda sudah Login!"
            });
        </script>
    @endif

    {{-- Middleware Error --}}
    @if (Session::get('noAccess'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Anda Tidak Memiliki Akses",
                footer: false
            });
        </script>
    @endif
@endsection
