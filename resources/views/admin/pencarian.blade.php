@extends('layouts.admin')
@section('content')
    <div>
        <p>Hasil pencarian untuk: {{ $keyword }}</p>
        <hr>
    </div>
    @if ($postingans_dipublikasi->count())
        <div>
            <h3 class="fw-black ">Postingan yang Ditayangkan</h3>
            <div class="line mb-3"></div>
        </div>
    @endif
    <div class="row g-4">
        @foreach ($postingans_dipublikasi as $postingan_dipublikasi)
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-content">
                        @if (is_null($postingan_dipublikasi->tgl_ditemukan) and is_null($postingan_dipublikasi->lokasi_ditemukan))
                            <p hidden class="status-barang">kehilangan</p>
                        @else
                            <p hidden class="status-barang">ditemukan</p>
                        @endif
                        <p hidden class="tgl_ajukan_time">
                            {{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->format('H:i') }}</p>
                        <p hidden class="tgl_ajukan_date">
                            {{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->translatedFormat('d F Y') }}</p>
                        <p hidden class="deskripsi_postingan">{{ $postingan_dipublikasi->deskripsi_postingan }}</p>
                        <p hidden class="lokasi_kehilangan">{{ $postingan_dipublikasi->lokasi_kehilangan }}</p>
                        @if (!is_null($postingan_dipublikasi->lokasi_ditemukan))
                            <p hidden class="lokasi_ditemukan">{{ $postingan_dipublikasi->lokasi_ditemukan }}</p>
                        @else
                            <p hidden class="lokasi_ditemukan">0</p>
                        @endif
                        <p hidden class="tgl_kehilangan">
                            {{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_kehilangan)->translatedFormat('d F Y') }}
                        </p>
                        @if (!is_null($postingan_dipublikasi->tgl_ditemukan))
                            <p hidden class="tgl_ditemukan">
                                {{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_ditemukan)->translatedFormat('d F Y') }}
                            </p>
                        @else
                            <p hidden class="tgl_ditemukan">0</p>
                        @endif
                        <p hidden class="no_telp">{{ $postingan_dipublikasi->no_telp }}</p>
                        <div class="card-top d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center gap-2">
                                {{-- <i class="fa-solid fa-user small"></i> --}}
                                <img src="/img/rigel.jpg" alt="" class="img-fluid rounded-circle" width="35">
                                <div class="d-flex flex-column gap-0 g-0">
                                    <p class="mb-0 p-0 fw-semibold small nama_akun">
                                        {{ $postingan_dipublikasi->akun->nama_akun }}</p>
                                    <div class="d-flex gap-1">
                                        <small class="m-0 p-0 fs-12">Diposting:</small>
                                        <small
                                            class="m-0 p-0 fs-12">{{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->diffForHumans(null, true) . ' lalu' }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm p-0 dropdown-toggle border-0 rounded-pill pt-1 px-1"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical fs-18"></i>
                                </button>
                                <ul class="dropdown-menu rounded-3 py-0 ">
                                    <li>
                                        <a class="rounded-top dropdown-item small py-2" href="#"><i
                                                class="fa-regular fa-pen-to-square"></i> Edit</a>
                                    </li>
                                    <li>
                                        <a class="rounded-bottom dropdown-item small py-2" href="#"><i
                                                class="fa-regular fa-trash-can"></i> Hapus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <p class="mb-0 small px-3 py-2">2 hari yang lalu</p> --}}
                        <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPost">
                            <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="judul_postingan fs-18 fw-bold mb-0">{{ $postingan_dipublikasi->judul_postingan }}</p>
                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                            {{-- <div class="row align-items-center">
                                <div class="col-1">
                                    <i class="fa-solid fa-user small"></i>
                                </div>
                                <div class="col">
                                    <p class="m-0 small">{{ $postingan_dipublikasi->akun->nama_akun }}</p>
                                </div>
                            </div> --}}
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
                                    <i class="fa-regular fa-calendar"></i>
                                </div>
                                <div class="col">
                                    <p class="m-0 small">31 Februari 1945</p>
                                </div>
                            </div>
                            {{-- <hr class="mb-0 p-0"> --}}
                        </div>
                    </div>
                    {{-- <div class="d-flex gap-3 p-3 pt-0">
                        <button
                            class="w-50 btn btn-outline-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                            <small>Hapus</small>
                            <i class="fa-regular fa-trash-can small"></i>
                        </button>
                        <button
                            class="w-50 btn btn-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                            <small>Edit</small>
                            <i class="fa-solid fa-pen-to-square small"></i>
                        </button>
                    </div> --}}
                </div>
            </div>
        @endforeach
    </div>


    @if ($postingans_diajukan->count())
        <div class="mt-5">
            <h3 class="fw-black ">Postingan yang Diajukan Pengguna</h3>
            <div class="line mb-3"></div>
        </div>
    @endif
    <div class="row g-4">
        @foreach ($postingans_diajukan as $postingan_diajukan)
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-content">
                        <div class="card-top d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center gap-2">
                                {{-- <i class="fa-solid fa-user small"></i> --}}
                                <img src="/img/rigel.jpg" alt="" class="img-fluid rounded-circle" width="35">
                                <div class="d-flex flex-column gap-0 g-0">
                                    <p class="mb-0 p-0 fw-semibold small">{{ $postingan_diajukan->akun->nama_akun }}</p>
                                    <div class="d-flex gap-1">
                                        <small class="m-0 p-0 fs-12">Diposting:</small>
                                        <small
                                            class="m-0 p-0 fs-12">{{ Carbon\Carbon::parse($postingan_diajukan->tgl_publikasi)->diffForHumans(null, true) . ' lalu' }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm p-0 dropdown-toggle border-0 rounded-pill pt-1 px-1"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical fs-18"></i>
                                </button>
                                <ul class="dropdown-menu rounded-3 py-0 ">
                                    <li>
                                        <a class="rounded-top dropdown-item small py-2" href="#"><i
                                                class="fa-regular fa-pen-to-square"></i> Edit</a>
                                    </li>
                                    <li>
                                        <a class="rounded-bottom dropdown-item small py-2" href="#"><i
                                                class="fa-regular fa-trash-can"></i> Hapus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <p class="mb-0 small px-3 py-2">2 hari yang lalu</p> --}}
                        <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPost">
                            <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fs-18 fw-bold mb-0">{{ $postingan_diajukan->judul_postingan }}</p>
                            <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                            {{-- <div class="row align-items-center">
                                <div class="col-1">
                                    <i class="fa-solid fa-user small"></i>
                                </div>
                                <div class="col">
                                    <p class="m-0 small">{{ $postingan_diajukan->akun->nama_akun }}</p>
                                </div>
                            </div> --}}
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
                                    <i class="fa-regular fa-calendar"></i>
                                </div>
                                <div class="col">
                                    <p class="m-0 small">31 Februari 1945</p>
                                </div>
                            </div>
                            {{-- <hr class="mb-0 p-0"> --}}
                        </div>
                    </div>
                    {{-- <div class="d-flex gap-3 p-3 pt-0">
                        <button
                            class="w-50 btn btn-outline-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                            <small>Hapus</small>
                            <i class="fa-regular fa-trash-can small"></i>
                        </button>
                        <button
                            class="w-50 btn btn-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                            <small>Edit</small>
                            <i class="fa-solid fa-pen-to-square small"></i>
                        </button>
                    </div> --}}
                </div>
            </div>
        @endforeach
    </div>
@endsection
