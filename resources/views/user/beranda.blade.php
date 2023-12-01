@extends('layouts.default')
@section('head')
    <link href="{{ asset('/css/beranda.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="hero d-flex align-items-center justify-content-center mt-5" id="hero">
        <img src="/img/postingan.png" alt="">
    </section>

    {{-- FILTER --}}
    <div class="container mt-5">
        <div class="filter d-flex gap-4">
            <div class="dropdown">
                <button class="btn btn-outline-secondary rounded-pill px-3 dropdown-toggle" type="button"
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
        <div class="container my-5">
            <div class="section-title">
                <div class="line"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-4">DITEMUKAN</h1>
                        <p class="lead">Barang yang sudah ditemukan dan disimpan di fakultas tertentu.</p>
                    </div>
                    <a href="/ditemukan"><button class="btn btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat Semua</button></a>
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
                        <div class="row pt-4">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-4">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-4">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carouselDitemukan"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control carousel-control-next" type="button" data-bs-target="#carouselDitemukan"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    {{-- KEHILANGAN --}}
    <section class="kehilangan cards-container py-4">
        <div class="container my-5">
            <div class="section-title">
                <div class="line"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-4">KEHILANGAN</h1>
                        <p class="lead">Barang yang belum ditemukan.</p>
                    </div>
                    <a href="/kehilangan"><button class="btn btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat Semua</button></a>
                </div>
            </div>
            <div id="carouselKehilangan" class="carousel slide position-relative">
                {{-- <button class="btn btn-outline-primary rounded-pill position-absolute lihat-semua px-3 py-1">Lihat
                    Semua</button> --}}
                <div class="carousel-indicators gap-3">
                    <button type="button" data-bs-target="#carouselKehilangan" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselKehilangan" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselKehilangan" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row pt-4">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-4">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-4">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button
                                                class="btn btn-outline-light">Lihat</button></div>
                                    </div>
                                    <div class="card-body">
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
                                        <small class="muted text-secondary">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control carousel-control-prev" type="button"
                    data-bs-target="#carouselKehilangan" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control carousel-control-next" type="button"
                    data-bs-target="#carouselKehilangan" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection
