@extends('layouts.default')
@section('head')
    <link href="{{ asset('/css/beranda.css') }}" rel="stylesheet">
@endsection
@section('content')
    {{-- FILTER --}}
    <div class="container mt-5">
        <div class="filter filter-semua d-flex gap-4">
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

    {{-- KEHILANGAN --}}
    <section class="kehilangan cards-container pb-5">
        <div class="container my-5">
            <div class="section-title">
                <div class="line"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-4">KEHILANGAN</h1>
                        <p class="lead">Barang yang belum ditemukan.</p>
                    </div>
                </div>
            </div>
            <div class="row pt-4 gy-4 ">
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
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button></div>
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
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button></div>
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
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button></div>
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
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button></div>
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
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button></div>
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
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button></div>
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
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button></div>
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
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button></div>
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
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button></div>
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
    </section>
@endsection
