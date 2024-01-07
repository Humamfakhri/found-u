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
                <div class="row pt-2 g-1 g-md-4">
                    @foreach ($postingans_ditemukan as $postingan_ditemukan)
                        <div class="col-lg-3">
                            <div class="card h-100">
                                <div class="card-content">
                                    <p hidden class="kategori">ditemukan</p>
                                    <p hidden class="lokasi_kehilangan">{{ $postingan_ditemukan->lokasi_kehilangan ? $postingan_ditemukan->lokasi_kehilangan : '-' }}</p>
                                    <p hidden class="lokasi_ditemukan">{{ $postingan_ditemukan->lokasi_ditemukan ? $postingan_ditemukan->lokasi_ditemukan : '-' }}</p>
                                    <p hidden class="lokasi_disimpan">{{ $postingan_ditemukan->lokasi_disimpan ? $postingan_ditemukan->lokasi_disimpan : '-' }}</p>
                                    <p hidden class="tgl_kehilangan">{{ $postingan_ditemukan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_ditemukan->tgl_kehilangan)->translatedFormat('d F Y') : '-' }}</p>
                                    <p hidden class="tgl_ditemukan">{{ $postingan_ditemukan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_ditemukan->tgl_ditemukan)->translatedFormat('d F Y') : '-' }}</p>
                                    <p hidden class="tgl_ditemukan">{{ Carbon\Carbon::parse($postingan_ditemukan->tgl_ditemukan)->translatedFormat('d F Y') }}</p>
                                    <p hidden class="no_telp">{{ $postingan_ditemukan->no_telp }}</p>
                                    <p hidden class="tgl_ajukan_time">{{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->format('H:i') }}</p>
                                    <p hidden class="tgl_ajukan_date">{{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->translatedFormat('d F Y') }}</p>
                                    <div class="card-img" data-bs-toggle="modal"
                                        data-bs-target="#lihatPostDitemukan">
                                        <img src="{{ $postingan_ditemukan->getImageURL() }}" alt="" class="img-fluid foto_barang">
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
                                                    {{ $postingan_ditemukan->lokasi_disimpan ? $postingan_ditemukan->lokasi_disimpan : '-' }}
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
                <div class="row pt-2 g-1 g-md-4">
                    @foreach ($postingans_kehilangan as $postingan_kehilangan)
                        <div class="col-lg-3">
                            <div class="card h-100">
                                <div class="card-content h-100 d-flex flex-column">
                                    <p hidden class="kategori">kehilangan</p>
                                    <p hidden class="no_telp">{{ $postingan_kehilangan->no_telp }}</p>
                                    <p hidden class="lokasi_kehilangan">{{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : '-' }}</p>
                                    <p hidden class="lokasi_ditemukan">{{ $postingan_kehilangan->lokasi_ditemukan ? $postingan_kehilangan->lokasi_ditemukan : '-' }}</p>
                                    <p hidden class="lokasi_disimpan">{{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : '-' }}</p>
                                    <p hidden class="tgl_kehilangan">{{ $postingan_kehilangan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_kehilangan->tgl_kehilangan)->translatedFormat('d F Y') : '-' }}</p>
                                    <p hidden class="tgl_ditemukan">{{ $postingan_kehilangan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_kehilangan->tgl_ditemukan)->translatedFormat('d F Y') : '-' }}</p>
                                    <p hidden class="no_telp">{{ $postingan_kehilangan->no_telp }}</p>
                                    <p hidden class="tgl_ajukan_time">{{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->format('H:i') }}</p>
                                    <p hidden class="tgl_ajukan_date">{{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->translatedFormat('d F Y') }}</p>
                                    <div class="card-img" data-bs-toggle="modal"
                                        data-bs-target="#lihatPostKehilangan">
                                        <img src="{{ $postingan_kehilangan->getImageURL() }}" alt="" class="img-fluid foto_barang">
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
                                                    {{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : '-' }}
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
        </section>
    @endif
@endsection
