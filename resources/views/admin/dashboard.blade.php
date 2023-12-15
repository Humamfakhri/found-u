@extends('layouts.admin')
@section('head')
    <link rel="stylesheet" href="css/dashboard.css">
@endsection
@section('content')
    <h2 class="fw-black mb-0">Dashboard</h2>
    <div class="row mt-0 g-3 g-lg-4">
        <div class="col-6 col-md-4 col-lg-3">
            <a href="/dashboard"
                class="text-decoration-none box bg-white rounded-3 px-4 py-3 h-100 d-flex flex-column justify-content-between">
                <p class="fs-18 fw-bold">Postingan Diajukan</p>
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="fw-bold m-0">3</h3>
                    <i class='fa-solid fa-inbox fs-2'></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <a href="/postingan"
                class="text-decoration-none box bg-white rounded-3 px-4 py-3 h-100 d-flex flex-column justify-content-between">
                <p class="fs-18 fw-bold">Postingan Ditayangkan</p>
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="fw-bold m-0">10</h3>
                    <i class='fa-solid fa-layer-group fs-2'></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <a href="/masukan"
                class="text-decoration-none box bg-white rounded-3 px-4 py-3 h-100 d-flex flex-column justify-content-between">
                <p class="fs-18 fw-bold">Masukan</p>
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="fw-bold m-0">12</h3>
                    <i class='fa-solid fa-comment-dots fs-2'></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <a href="/faq"
                class="text-decoration-none box bg-white rounded-3 px-4 py-3 h-100 d-flex flex-column justify-content-between">
                <p class="fs-18 fw-bold">FAQ</p>
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="fw-bold m-0">3</h3>
                    <i class='fa-solid fa-circle-question fs-2'></i>
                </div>
            </a>
        </div>
    </div>

    <h2 class="fw-black mt-5">Postingan Diajukan</h2>
    <p class="fs-18">Postingan dari pengguna yang membutuhkan konfirmasi Admin.</p>
    <div class="row g-4">
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-content">
                    <div class="row align-items-center px-3 py-2 gap-1" data-bs-toggle="tooltip"
                        data-bs-title="Waktu Pengajuan Postingan">
                        <div class="col-1 align-items-center h-100 d-flex">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="col">
                            <small class="m-0 small">09:01 | 18/08/2023</small>
                        </div>
                    </div>
                    <div class="card-img">
                        <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                        <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="fa-solid fa-user small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Tidak Diketahui</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Lab D2 - FIT</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">31 Feb 1945</p>
                            </div>
                        </div>
                        <hr class="mb-0 p-0">
                    </div>
                </div>
                <div class="d-flex gap-3 p-3 pt-0">
                    <button
                        class="w-50 btn btn-outline-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                        <small>Tolak</small>
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <button
                        class="w-50 btn btn-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                        <small>Terima</small>
                        <i class="fa-solid fa-check"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-content">
                    <div class="row align-items-center px-3 py-2 gap-1" data-bs-toggle="tooltip"
                        data-bs-title="Waktu Pengajuan Postingan">
                        <div class="col-1 align-items-center h-100 d-flex">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="col">
                            <small class="m-0 small">09:01 | 18/08/2023</small>
                        </div>
                    </div>
                    <div class="card-img">
                        <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                        <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="fa-solid fa-user small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Tidak Diketahui</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Lab D2 - FIT</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">31 Feb 1945</p>
                            </div>
                        </div>
                        <hr class="mb-0 p-0">
                    </div>
                </div>
                <div class="d-flex gap-3 p-3 pt-0">
                    <button
                        class="w-50 btn btn-outline-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                        <small>Tolak</small>
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <button
                        class="w-50 btn btn-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                        <small>Terima</small>
                        <i class="fa-solid fa-check"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-content">
                    <div class="row align-items-center px-3 py-2 gap-1" data-bs-toggle="tooltip"
                        data-bs-title="Waktu Pengajuan Postingan">
                        <div class="col-1 align-items-center h-100 d-flex">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="col">
                            <small class="m-0 small">09:01 | 18/08/2023</small>
                        </div>
                    </div>
                    <div class="card-img">
                        <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                        <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="fa-solid fa-user small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Tidak Diketahui</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Lab D2 - FIT</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">31 Feb 1945</p>
                            </div>
                        </div>
                        <hr class="mb-0 p-0">
                    </div>
                </div>
                <div class="d-flex gap-3 p-3 pt-0">
                    <button
                        class="w-50 btn btn-outline-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                        <small>Tolak</small>
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <button
                        class="w-50 btn btn-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                        <small>Terima</small>
                        <i class="fa-solid fa-check"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-content">
                    <div class="row align-items-center px-3 py-2 gap-1" data-bs-toggle="tooltip"
                        data-bs-title="Waktu Pengajuan Postingan">
                        <div class="col-1 align-items-center h-100 d-flex">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="col">
                            <small class="m-0 small">09:01 | 18/08/2023</small>
                        </div>
                    </div>
                    <div class="card-img">
                        <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                        <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="fa-solid fa-user small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Tidak Diketahui</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Lab D2 - FIT</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">31 Feb 1945</p>
                            </div>
                        </div>
                        <hr class="mb-0 p-0">
                    </div>
                </div>
                <div class="d-flex gap-3 p-3 pt-0">
                    <button
                        class="w-50 btn btn-outline-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                        <small>Tolak</small>
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <button
                        class="w-50 btn btn-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                        <small>Terima</small>
                        <i class="fa-solid fa-check"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
