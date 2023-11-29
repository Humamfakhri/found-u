@extends('layouts.default')
@section('head')
    <link href="{{ asset('/css/beranda.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="hero py-4 d-flex align-items-center justify-content-center mt-5" id="hero">
        <div class="text-center"><img src="/img/postingan.png" alt="" class="img-fluid "></div>
    </section>
    <section class="ditemukan">
        <div class="container my-5">
            <div class="section-title">
                <div class="line"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-4">DITEMUKAN</h1>
                    <div class="filter">
                        <div class="btn-group">
                            <button class="btn btn-outline-secondary rounded-pill px-3 btn-sm dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Urutkan
                                <i class="ms-2 fa-solid fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>Terbaru</li>
                                <li>Terlama</li>
                            </ul>
                        </div>
                        <div class="btn-group ms-4">
                            <button class="btn btn-outline-secondary rounded-pill px-3 btn-sm dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tanggal
                                <i class="ms-2 fa-regular fa-calendar"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>Terbaru</li>
                                <li>Terlama</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="lead">Barang yang sudah ditemukan dan disimpan di fakultas tertentu.</p>
            </div>
            <div class="row pt-5">
                <div class="col-lg-3">
                    <div class="card">
                        <img src="/img/mouse.jpg" alt="">
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
                            <small class="muted text-secondary">31 Februari  1945</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="/img/mouse.jpg" alt="">
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
                            <small class="muted text-secondary">31 Februari  1945</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="/img/mouse.jpg" alt="">
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
                            <small class="muted text-secondary">31 Februari  1945</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="/img/mouse.jpg" alt="">
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
                            <small class="muted text-secondary">31 Februari  1945</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
