@extends('layouts.default')
@section('head')
    <link href="{{ asset('/css/beranda.css') }}" rel="stylesheet">
@endsection
@section('content')
    {{-- FILTER --}}
    {{-- <div class="container mt-5">
        <div class="filter filter-semua d-flex gap-4">
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ $filter }}
                    <i class="ms-2 fa-solid fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu rounded-4 py-0 rounded-pill">
                    <li class="rounded-pill">
                        <a class="rounded-pill dropdown-item small"
                            href="{{ $filter == 'Terbaru' ? 'ditemukan?filter=terlama' : 'ditemukan' }}">{{ $filter_list }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}

    <div class="container" style="margin-top: 6rem">
        <p class="fs-18 mt-5 mb-2 fw-light">Hasil pencarian untuk: "{{ $keyword }}"</p>
        <div class="line"></div>
        @if ($postingans_ditemukan->count() == 0 and $postingans_kehilangan->count() == 0)
            <div class="text-center">
                <h5 class="fw-light text-center mt-5 pt-5">Tidak menemukan hasil pencarian</h5>
                <i class="fa-regular fa-face-frown-open fs-1 mt-2"></i>
            </div>
        @endif
    </div>

    {{-- DITEMUKAN --}}
    @if ($postingans_ditemukan->count() != 0)
        <section class="ditemukan cards-container">
            <div class="container mb-4">
                <div class="section-title">
                    <div class="d-flex align-items-center">
                        <div>
                            <h3 class="mt-4 fw-black mb-0">DITEMUKAN</h3>
                            <p class="fs-18 fw-light">Barang yang sudah ditemukan dan disimpan di fakultas tertentu.</p>
                        </div>
                    </div>
                </div>
                <div class="row pt-2 gx-1 gx-md-4">
                    @foreach ($postingans_ditemukan as $postingan_ditemukan)
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    <div class="card-body d-none d-md-block">
                                        <p class="fs-18 fw-bold mb-0">{{ $postingan_ditemukan->judul_postingan }}</p>
                                        <p class="mb-2">{{ $postingan_ditemukan->deskripsi_postingan }}</p>
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="small fa-solid fa-user"></i>
                                            </div>
                                            <div class="col">
                                                <p class="small m-0">Tidak Diketahui</p>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <i class="small fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="col">
                                                <p class="small m-0">Lab D2 - FIT</p>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <small class="muted small">31 Februari 1945</small>
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
    @if ($postingans_kehilangan->count() != 0)
        <section class="kehilangan cards-container pb-5">
            <div class="container">
                <div class="section-title">
                    {{-- <div class="line"></div> --}}
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="mt-4 fw-black mb-0">KEHILANGAN</h3>
                            <p class="fs-18 fw-light">Barang yang belum ditemukan.</p>
                        </div>
                    </div>
                </div>
                <div class="row pt-4 gy-4 ">
                    @foreach ($postingans_kehilangan as $postingan_kehilangan)
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-img">
                                        <img src="/img/mouse.jpg" alt="" class="img-fluid">
                                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    <div class="card-body d-none d-md-block">
                                        <p class="fs-18 fw-bold mb-0">{{ $postingan_kehilangan->judul_postingan }}</p>
                                        <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="small fa-solid fa-user"></i>
                                            </div>
                                            <div class="col">
                                                <p class="small m-0">Tidak Diketahui</p>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <i class="small fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="col">
                                                <p class="small m-0">Lab D2 - FIT</p>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <small class="muted small">31 Februari 1945</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
