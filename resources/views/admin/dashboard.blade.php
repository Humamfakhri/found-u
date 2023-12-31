@extends('layouts.admin')
@section('head')
    <link rel="stylesheet" href="css/dashboard.css">
@endsection
@section('content')
    <h3 class="fw-black mb-0">Dashboard</h3>
    <div class="row mt-0 g-3 g-lg-4">
        <div class="col-6 col-md-4 col-lg-3">
            <a href=""
                class="text-decoration-none box bg-white rounded-3 px-4 py-3 h-100 d-flex flex-column justify-content-between">
                <p class="fs-18 fw-bold">Postingan Diajukan</p>
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="fw-bold m-0">{{ $postingans_diajukan->count() }}</h3>
                    <i class='fa-solid fa-inbox fs-2'></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <a href="/postingan"
                class="text-decoration-none box bg-white rounded-3 px-4 py-3 h-100 d-flex flex-column justify-content-between">
                <p class="fs-18 fw-bold">Postingan Ditayangkan</p>
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="fw-bold m-0">{{ $postingans_dipublikasi->count() }}</h3>
                    <i class='fa-solid fa-layer-group fs-2'></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <a href="/masukan"
                class="text-decoration-none box bg-white rounded-3 px-4 py-3 h-100 d-flex flex-column justify-content-between">
                <p class="fs-18 fw-bold">Masukan</p>
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="fw-bold m-0">{{ $masukans->count() }}</h3>
                    <i class='fa-solid fa-comment-dots fs-2'></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <a href="/faq"
                class="text-decoration-none box bg-white rounded-3 px-4 py-3 h-100 d-flex flex-column justify-content-between">
                <p class="fs-18 fw-bold">FAQ</p>
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="fw-bold m-0">{{ $faqs->count() }}</h3>
                    <i class='fa-solid fa-circle-question fs-2'></i>
                </div>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-5">
        <div>
            <div class="d-flex align-items-center gap-2">
                <h3 class="fw-black mb-0">Postingan Diajukan<h3>
                @if ($postingans_diajukan->count())
                    <small
                        class="counter-postingan bg-primary rounded-pill text-white">{{ $postingans_diajukan->count() }}</small>
                @endif
            </div>
            <p class="fs-18">Postingan dari pengguna yang membutuhkan konfirmasi Admin.</p>
        </div>
        @if ($postingans_diajukan->count())
        <div class="filter d-flex gap-4">
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ $filter }}
                    <i class="ms-2 fa-solid fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu rounded-4 py-0 rounded-pill">
                    <li class="rounded-pill">
                        <a class="rounded-pill dropdown-item small" href="{{ $filter == 'Terbaru' ? 'dashboard?filter=terlama' : 'dashboard' }}">{{ $filter_list }}</a>
                    </li>
                </ul>
            </div>
        </div>
        @endif
    </div>
    @if (!$postingans_diajukan->count())
            <div class="text-center mt-5 pt-4">
                <i class='fa-solid fa-inbox display-1'></i>
                <p class="text-muted mt-3">Tidak ada postingan dalam pengajuan</p>
            </div>
        @endif
    <div class="row g-4">
        @foreach ($postingans_diajukan as $postingan_diajukan)
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-content">
                        <div class="row align-items-center px-3 py-2 gap-1" data-bs-toggle="tooltip"
                            data-bs-title="Waktu Pengajuan Postingan">
                            <div class="col-1 align-items-center h-100 d-flex">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="col">
                                <small
                                    class="m-0 small">{{ Carbon\Carbon::parse($postingan_diajukan->created_at)->format('H:i') }}
                                    |
                                    {{ Carbon\Carbon::parse($postingan_diajukan->created_at)->format('d-m-Y') }}</small>
                            </div>
                        </div>
                        <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPost">
                            <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                            <div class="card-img-floating">
                                <button class="btn btn-outline-light">Lihat</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold mb-1">{{ $postingan_diajukan->judul_postingan }}</h5>
                            <p class="mb-2">{{ $postingan_diajukan->deskripsi_postingan }}</p>
                            <div class="row align-items-center">
                                <div class="col-1">
                                    <i class="fa-solid fa-user small"></i>
                                </div>
                                <div class="col">
                                    <p class="m-0 small">{{ $postingan_diajukan->akun->nama_akun }}</p>
                                </div>
                            </div>
                            <div class="row align-items-center mt-1">
                                <div class="col-1">
                                    <i class="fa-solid fa-location-dot small"></i>
                                </div>
                                <div class="col">
                                    <p class="m-0 small">{{ $postingan_diajukan->lokasi_kehilangan }}</p>
                                </div>
                            </div>
                            <div class="row align-items-center mt-1">
                                <div class="col-1">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="col">
                                    <p class="m-0 small">
                                        {{ Carbon\Carbon::parse($postingan_diajukan->created_at)->format('Y-m-d') }}
                                    </p>
                                </div>
                            </div>
                            <hr class="mb-0 p-0">
                        </div>
                    </div>
                    <div class="d-flex gap-3 p-3 pt-0">
                        <form action="{{ route('postingan.update', $postingan_diajukan->id_postingan) }}" method="POST"
                            class="w-50">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="tolak">
                            <button type="submit"
                                class="w-100 btn btn-outline-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                                <small>Tolak</small>
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </form>
                        <form action="{{ route('postingan.update', $postingan_diajukan->id_postingan) }}" method="POST"
                            class="w-50">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="publikasi">
                            <button type="submit"
                                class="w-100 btn btn-primary py-0 rounded-pill d-flex align-items-center justify-content-center gap-1">
                                <small>Publikasi</small>
                                <i class="fa-solid fa-check"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
