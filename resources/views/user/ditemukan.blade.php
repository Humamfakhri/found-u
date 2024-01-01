@extends('layouts.default')
@section('head')
    <link href="{{ asset('/css/beranda.css') }}" rel="stylesheet">
@endsection
@section('content')
    {{-- FILTER --}}
    <div class="container mt-5">
        <div class="filter filter-semua d-flex gap-4">
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
        <div class="container my-5">
            <div class="section-title">
                <div class="line"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="mt-4">DITEMUKAN</h2>
                        <p class="lead">Barang yang sudah ditemukan dan disimpan di fakultas tertentu.</p>
                    </div>
                </div>
            </div>
            <div class="row pt-4 gx-1 gx-md-4">
                <div class="col-4 col-lg-3 col-xl-12">
                    {{-- SATU CARD-CONTAINER UNTUK LARGE SCREEN --}}
                    <div class="d-none d-xl-flex gap-3">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-img">
                                    <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                    <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
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
                                    <small class="muted text-secondary">31 Februari 1945</small>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-img">
                                    <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                    <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
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
                                    <small class="muted text-secondary">31 Februari 1945</small>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-img">
                                    <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                    <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
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
                                    <small class="muted text-secondary">31 Februari 1945</small>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-img">
                                    <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                    <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
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
                                    <small class="muted text-secondary">31 Februari 1945</small>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-img">
                                    <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                    <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
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
                                    <small class="muted text-secondary">31 Februari 1945</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- SEBUAH CARD UNTUK DI BAWAH LARGE SCREEN --}}
                    <div class="card d-xl-none">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
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
                                <small class="muted text-secondary">31 Februari 1945</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-3 d-xl-none">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
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
                                <small class="muted text-secondary">31 Februari 1945</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-3 d-xl-none">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
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
                                <small class="muted text-secondary">31 Februari 1945</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block d-xl-none">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
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
                                <small class="muted text-secondary">31 Februari 1945</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
