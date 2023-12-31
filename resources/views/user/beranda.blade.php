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
        <div class="filter d-flex gap-4 justify-content-end justify-content-md-start">
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Urutkan
                    <i class="ms-2 fa-solid fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu rounded-4">
                    <li><a class="dropdown-item pe-0" href="#">Terbaru</a></li>
                    <li><a class="dropdown-item pe-0" href="#">Terlama</a></li>
                </ul>
            </div>
            {{-- <input type="date" class="rounded-pill px-4"> --}}
        </div>
    </div>

    {{-- DITEMUKAN --}}
    <section class="ditemukan cards-container">
        <div class="container my-4">
            <div class="section-title">
                <div class="line d-none d-md-block"></div>
                <div class="d-md-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="mt-4 mb-0 mb-md-2">DITEMUKAN</h2>
                        <p class="lead m-0">Barang yang sudah ditemukan dan disimpan di fakultas tertentu.</p>
                    </div>
                    <div class="flex-shrink-0 d-flex align-items-center justify-content-between d-md-block mt-4">
                        <a href="/ditemukan"><button
                                class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                Semua</button></a>
                        <div class="d-flex align-items-center justify-content-end gap-3 mt-1 mt-md-3">
                            <button class="carousel-button btn p-0" type="button" data-bs-target="#carouselDitemukan"
                                data-bs-slide="prev"><i class="fs-2 fa-solid fa-circle-chevron-left"></i></button>
                            <button class="carousel-button btn p-0" type="button" data-bs-target="#carouselDitemukan"
                                data-bs-slide="next"><i class="fs-2 fa-solid fa-circle-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carouselDitemukan" class="carousel slide position-relative">
                <div class="carousel-indicators gap-3 m-0">
                    <button type="button" data-bs-target="#carouselDitemukan" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselDitemukan" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselDitemukan" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row pt-4 gx-1 gx-md-4">
                            <div class="col-4 col-lg-3 col-xl-12">
                                {{-- SATU CARD-CONTAINER UNTUK LARGE SCREEN --}}
                                <div class="d-none d-xl-flex gap-3">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- SEBUAH CARD UNTUK DI BAWAH LARGE SCREEN --}}
                                <div class="card d-xl-none">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-4 gx-1 gx-md-4">
                            <div class="col-4 col-lg-3 col-xl-12">
                                {{-- SATU CARD-CONTAINER UNTUK LARGE SCREEN --}}
                                <div class="d-none d-xl-flex gap-3">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- SEBUAH CARD UNTUK DI BAWAH LARGE SCREEN --}}
                                <div class="card d-xl-none">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-4 gx-1 gx-md-4">
                            <div class="col-4 col-lg-3 col-xl-12">
                                {{-- SATU CARD-CONTAINER UNTUK LARGE SCREEN --}}
                                <div class="d-none d-xl-flex gap-3">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- SEBUAH CARD UNTUK DI BAWAH LARGE SCREEN --}}
                                <div class="card d-xl-none">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- KEHILANGAN --}}
    <section class="kehilangan cards-container">
        <div class="container my-4">
            <div class="section-title">
                <div class="line d-none d-md-block"></div>
                <div class="d-md-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="mt-4 mb-0 mb-md-2">KEHILANGAN</h2>
                        <p class="lead m-0">Barang yang belum ditemukan.</p>
                    </div>
                    <div class="flex-shrink-0 d-flex align-items-center justify-content-between d-md-block mt-4">
                        <a href="/kehilangan"><button
                                class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                Semua</button></a>
                        <div class="d-flex align-items-center justify-content-end gap-3 mt-1 mt-md-3">
                            <button class="carousel-button btn p-0" type="button" data-bs-target="#carouselKehilangan"
                                data-bs-slide="prev"><i class="fs-2 fa-solid fa-circle-chevron-left"></i></button>
                            <button class="carousel-button btn p-0" type="button" data-bs-target="#carouselKehilangan"
                                data-bs-slide="next"><i class="fs-2 fa-solid fa-circle-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carouselKehilangan" class="carousel slide position-relative">
                <div class="carousel-indicators gap-3 m-0">
                    <button type="button" data-bs-target="#carouselKehilangan" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselKehilangan" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselKehilangan" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row pt-4 gx-1 gx-md-4">
                            <div class="col-4 col-lg-3 col-xl-12">
                                {{-- SATU CARD-CONTAINER UNTUK LARGE SCREEN --}}
                                <div class="d-none d-xl-flex gap-3">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- SEBUAH CARD UNTUK DI BAWAH LARGE SCREEN --}}
                                <div class="card d-xl-none">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-4 gx-1 gx-md-4">
                            <div class="col-4 col-lg-3 col-xl-12">
                                {{-- SATU CARD-CONTAINER UNTUK LARGE SCREEN --}}
                                <div class="d-none d-xl-flex gap-3">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- SEBUAH CARD UNTUK DI BAWAH LARGE SCREEN --}}
                                <div class="card d-xl-none">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-4 gx-1 gx-md-4">
                            <div class="col-4 col-lg-3 col-xl-12">
                                {{-- SATU CARD-CONTAINER UNTUK LARGE SCREEN --}}
                                <div class="d-none d-xl-flex gap-3">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                                <div class="card-img-floating"><button
                                                        class="btn btn-outline-light">Lihat</button>
                                                </div>
                                            </div>
                                            <div class="card-body d-none d-md-block">
                                                <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                                <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Tidak Diketahui</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="m-0">Lab D2 - FIT</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                                <small class="muted">31 Februari 1945</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- SEBUAH CARD UNTUK DI BAWAH LARGE SCREEN --}}
                                <div class="card d-xl-none">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block d-xl-none">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                            <div class="card-img-floating"><button
                                                    class="btn btn-outline-light">Lihat</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-none d-md-block">
                                            <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Tidak Diketahui</p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-0">Lab D2 - FIT</p>
                                                </div>
                                            </div>
                                            <hr class="mb-2">
                                            <small class="muted">31 Februari 1945</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
