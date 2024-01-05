@extends('layouts.default')
@section('head')
    <link href="{{ asset('/css/beranda.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="hero d-flex align-items-center justify-content-center mt-5" id="hero">
        <img src="/img/postingan.png" alt="">
    </section>

    {{-- FILTER --}}
    <div class="container mt-4 mt-md-5">
        <div class="filter d-flex gap-4">
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
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
        </div>
    </div>

    {{-- DITEMUKAN --}}
    <section class="ditemukan cards-container">
        <div class="container my-4">
            <div class="section-title">
                <div class="line d-none d-md-block"></div>
                <div class="d-md-flex justify-content-between align-items-center">
                    <div class="{{ $postingans_ditemukan->count() > 4 ? '' : 'mb-3' }}">
                        <h3 class="mt-3 fw-black mb-0">DITEMUKAN</h3>
                        <p class="fs-18 fw-light mb-0">Barang yang sudah ditemukan dan disimpan di fakultas tertentu.</p>
                    </div>
                    <div
                        class="flex-shrink-0 d-flex align-items-center justify-content-between d-md-block mt-4">
                        @if ($postingans_ditemukan->count() > 4)
                            <a href="/ditemukan"><button
                                    class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                    Semua</button></a>
                        @endif
                        @if ($postingans_ditemukan->count() > 4)
                            <div class="d-flex align-items-center justify-content-end gap-3 mt-1 mt-md-3">
                                <button class="carousel-button btn p-0" type="button" data-bs-target="#carouselDitemukan"
                                    data-bs-slide="prev"><i class="fs-2 fa-solid fa-circle-chevron-left"></i></button>
                                <button class="carousel-button btn p-0" type="button" data-bs-target="#carouselDitemukan"
                                    data-bs-slide="next"><i class="fs-2 fa-solid fa-circle-chevron-right"></i></button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div id="carouselDitemukan" class="carousel slide position-relative">
                <div class="carousel-indicators gap-3 m-0">
                    @if ($postingans_ditemukan->count() > 4)
                        <button type="button" data-bs-target="#carouselDitemukan" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselDitemukan" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    @endif
                    {{-- <button type="button" data-bs-target="#carouselDitemukan" data-bs-slide-to="2"
                        aria-label="Slide 3"></button> --}}
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row pt-2 g-1 g-md-4">
                            @foreach ($postingans_ditemukan as $postingan_ditemukan)
                                <div class="col-lg-3">
                                    <div class="card h-100">
                                        <div class="card-content">
                                            <p hidden class="kategori">ditemukan</p>
                                            <p hidden class="lokasi_kehilangan">
                                                {{ $postingan_ditemukan->lokasi_kehilangan ? $postingan_ditemukan->lokasi_kehilangan : 'Tidak diketahui' }}
                                            </p>
                                            <p hidden class="lokasi_ditemukan">
                                                {{ $postingan_ditemukan->lokasi_ditemukan ? $postingan_ditemukan->lokasi_ditemukan : 'Tidak diketahui' }}
                                            </p>
                                            <p hidden class="tgl_kehilangan">
                                                {{ $postingan_ditemukan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_ditemukan->tgl_kehilangan)->translatedFormat('d F Y') : 'Tidak diketahui' }}
                                            </p>
                                            <p hidden class="tgl_ditemukan">
                                                {{ Carbon\Carbon::parse($postingan_ditemukan->tgl_ditemukan)->translatedFormat('d F Y') }}
                                            </p>
                                            <p hidden class="no_telp">{{ $postingan_ditemukan->no_telp }}</p>
                                            <p hidden class="tgl_ajukan_time">
                                                {{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->format('H:i') }}
                                            </p>
                                            <p hidden class="tgl_ajukan_date">
                                                {{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->translatedFormat('d F Y') }}
                                            </p>
                                            <div class="card-img" data-bs-toggle="modal"
                                                data-bs-target="#lihatPostDitemukan">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <p class="fs-18 fw-bold mb-0 judul_postingan">
                                                    {{ $postingan_ditemukan->judul_postingan }}</p>
                                                <p class="mb-2 deskripsi_postingan">
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
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="small fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="small m-0 lokasi_disimpan">
                                                            {{ $postingan_ditemukan->lokasi_disimpan ? $postingan_ditemukan->lokasi_disimpan : 'Tidak diketahui' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small
                                                    class="muted small">{{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->translatedFormat('d F Y') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">

                    </div>
                    <div class="carousel-item">

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- KEHILANGAN --}}
    <section class="kehilangan cards-container mt-5">
        <div class="container my-4">
            <div class="section-title">
                <div class="line d-none d-md-block"></div>
                <div class="d-md-flex justify-content-between align-items-center">
                    <div class="{{ $postingans_kehilangan->count() > 4 ? '' : 'mb-3' }}">
                        <h2 class="mt-4 mb-0 mb-md-2">KEHILANGAN</h2>
                        <p class="lead m-0">Barang yang belum ditemukan.</p>
                    </div>
                    <div
                        class="flex-shrink-0 d-flex align-items-center justify-content-between d-md-block mt-4">
                        @if ($postingans_kehilangan->count() > 4)
                        <a href="/kehilangan"><button
                                class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                Semua</button></a>
                        @endif
                        @if ($postingans_kehilangan->count() > 4)
                            <div class="d-flex align-items-center justify-content-end gap-3 mt-1 mt-md-3 mb-4">
                                <button class="carousel-button btn p-0" type="button"
                                    data-bs-target="#carouselKehilangan" data-bs-slide="prev"><i
                                        class="fs-2 fa-solid fa-circle-chevron-left"></i></button>
                                <button class="carousel-button btn p-0" type="button"
                                    data-bs-target="#carouselKehilangan" data-bs-slide="next"><i
                                        class="fs-2 fa-solid fa-circle-chevron-right"></i></button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div id="carouselKehilangan" class="carousel slide position-relative">
                <div class="carousel-indicators gap-3 m-0">
                    @if ($postingans_kehilangan->count() > 4)
                        <button type="button" data-bs-target="#carouselKehilangan" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselKehilangan" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    @endif
                    {{-- <button type="button" data-bs-target="#carouselKehilangan" data-bs-slide-to="2"
                        aria-label="Slide 3"></button> --}}
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row pt-2 g-1 g-md-4">
                            @foreach ($postingans_kehilangan->slice(0, 4) as $postingan_kehilangan)
                                <div class="col-lg-3">
                                    <div class="card h-100">
                                        <div class="card-content h-100 d-flex flex-column">
                                            <p hidden class="kategori">kehilangan</p>
                                            <p hidden class="no_telp">{{ $postingan_kehilangan->no_telp }}</p>
                                            <p hidden class="lokasi_kehilangan">
                                                {{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : 'Tidak diketahui' }}
                                            </p>
                                            {{-- <p hidden class="lokasi_ditemukan">
                                                {{ $postingan_kehilangan->lokasi_ditemukan }}</p> --}}
                                            <p hidden class="tgl_kehilangan">
                                                {{ $postingan_kehilangan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_kehilangan->tgl_kehilangan)->translatedFormat('d F Y') : 'Tidak diketahui' }}
                                            </p>
                                            {{-- <p hidden class="tgl_ditemukan">
                                                {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_ditemukan)->translatedFormat('d F Y') }}
                                            </p> --}}
                                            <p hidden class="no_telp">{{ $postingan_kehilangan->no_telp }}</p>
                                            <p hidden class="tgl_ajukan_time">
                                                {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->format('H:i') }}
                                            </p>
                                            <p hidden class="tgl_ajukan_date">
                                                {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->translatedFormat('d F Y') }}
                                            </p>
                                            <div class="card-img" data-bs-toggle="modal"
                                                data-bs-target="#lihatPostKehilangan">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body pb-0 d-none d-md-block flex-fill">
                                                <p class="fs-18 fw-bold mb-0 judul_postingan">
                                                    {{ $postingan_kehilangan->judul_postingan }}</p>
                                                <p class="mb-2 deskripsi_postingan">
                                                    {{ $postingan_kehilangan->deskripsi_postingan }}</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="small fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="small m-0 nama_akun">
                                                            {{ $postingan_kehilangan->akun->nama_akun }}</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="small fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="small m-0 lokasi_kehilangan">
                                                            {{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : 'Tidak diketahui' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-3 pb-3">
                                                <hr class="mb-2">
                                                <small
                                                    class="muted small">{{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->translatedFormat('d F Y') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-2 g-1 g-md-4">
                            @foreach ($postingans_kehilangan->slice(4, 8) as $postingan_kehilangan)
                                <div class="col-lg-3">
                                    <div class="card h-100">
                                        <div class="card-content h-100 d-flex flex-column">
                                            <p hidden class="kategori">kehilangan</p>
                                            <p hidden class="no_telp">{{ $postingan_kehilangan->no_telp }}</p>
                                            <p hidden class="lokasi_kehilangan">
                                                {{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : 'Tidak diketahui' }}
                                            </p>
                                            {{-- <p hidden class="lokasi_ditemukan">
                                                {{ $postingan_kehilangan->lokasi_ditemukan }}</p> --}}
                                            <p hidden class="tgl_kehilangan">
                                                {{ $postingan_kehilangan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_kehilangan->tgl_kehilangan)->translatedFormat('d F Y') : 'Tidak diketahui' }}
                                            </p>
                                            {{-- <p hidden class="tgl_ditemukan">
                                                {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_ditemukan)->translatedFormat('d F Y') }}
                                            </p> --}}
                                            <p hidden class="no_telp">{{ $postingan_kehilangan->no_telp }}</p>
                                            <p hidden class="tgl_ajukan_time">
                                                {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->format('H:i') }}
                                            </p>
                                            <p hidden class="tgl_ajukan_date">
                                                {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->translatedFormat('d F Y') }}
                                            </p>
                                            <div class="card-img" data-bs-toggle="modal"
                                                data-bs-target="#lihatPostKehilangan">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body pb-0 d-none d-md-block flex-fill">
                                                <p class="fs-18 fw-bold mb-0 judul_postingan">
                                                    {{ $postingan_kehilangan->judul_postingan }}</p>
                                                <p class="mb-2 deskripsi_postingan">
                                                    {{ $postingan_kehilangan->deskripsi_postingan }}</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="small fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="small m-0 nama_akun">
                                                            {{ $postingan_kehilangan->akun->nama_akun }}</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="small fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="small m-0 lokasi_kehilangan">
                                                            {{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : 'Tidak diketahui' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-3 pb-3">
                                                <hr class="mb-2">
                                                <small
                                                    class="muted small">{{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->translatedFormat('d F Y') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
