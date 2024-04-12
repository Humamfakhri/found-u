@extends('layouts.admin')
@section('content')
    {{-- MODAL EDIT POST --}}
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
                <div class="card h-100">
                    <div class="card-content">
                        <p hidden class="id_postingan">{{ $postingan_dipublikasi->id_postingan }}</p>
                        @if (is_null($postingan_dipublikasi->tgl_ditemukan) and is_null($postingan_dipublikasi->lokasi_ditemukan))
                            <p hidden class="status-barang">Kehilangan</p>
                        @else
                            <p hidden class="status-barang">Ditemukan</p>
                        @endif
                        <p hidden class="tgl_ajukan_time">{{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->format('H:i') }}</p>
                        <p hidden class="tgl_ajukan_date">{{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->translatedFormat('d F Y') }}</p>
                        <p hidden class="deskripsi_postingan">{{ $postingan_dipublikasi->deskripsi_postingan }}</p>
                        <p hidden class="lokasi_kehilangan">{{ $postingan_dipublikasi->lokasi_kehilangan }}</p>
                        @if (!is_null($postingan_dipublikasi->lokasi_ditemukan))
                            <p hidden class="lokasi_ditemukan">{{ $postingan_dipublikasi->lokasi_ditemukan }}</p>
                            <p hidden class="lokasi_disimpan">{{ $postingan_dipublikasi->lokasi_disimpan }}</p>
                        @else
                            <p hidden class="lokasi_ditemukan">0</p>
                            <p hidden class="lokasi_disimpan">0</p>
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
                                <img src="{{ $postingan_dipublikasi->akun->getImageURL() }}" alt=""
                                    class="img-fluid rounded-circle" width="35">
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
                                        <a href="#" class="btnEditPost rounded-top dropdown-item small py-2"
                                            data-bs-toggle="modal" data-bs-target="#editPost"><i
                                                class="fa-regular fa-pen-to-square"></i> Edit</a>
                                    </li>
                                    <li>
                                        <form
                                            action="{{ route('postingan.delete', $postingan_dipublikasi->id_postingan) }}"
                                            method="POST" class="dropdown-item rounded-bottom">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="hapus" value=1>
                                            <button type="submit"
                                                class="rounded-bottom btn small px-0 py-1 d-flex align-items-center gap-1">
                                                <i class="fa-regular fa-trash-can"></i>
                                                <small>Hapus</small>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <p class="mb-0 small px-3 py-2">2 hari yang lalu</p> --}}
                        <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPost">
                            <img src="{{ $postingan_dipublikasi->getImageURL() }}" alt=""
                                class="img-fluid rounded-0 foto_barang">
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="judul_postingan fs-18 fw-bold mb-0">{{ $postingan_dipublikasi->judul_postingan }}</p>
                            <p class="mb-2">{{ $postingan_dipublikasi->deskripsi_postingan }}</p>
                            <div class="row align-items-center mt-1">
                                @if ($postingan_dipublikasi->lokasi_disimpan != null)
                                    <div class="col-1">
                                        <i class="fa-solid fa-location-dot small"></i>
                                    </div>
                                @endif
                                <div class="col">
                                    <p class="m-0 small">{{ $postingan_dipublikasi->lokasi_disimpan }}</p>
                                </div>
                                <div class="col d-flex align-items-center">
                                    @if (is_null($postingan_dipublikasi->tgl_ditemukan) and is_null($postingan_dipublikasi->lokasi_ditemukan))
                                        <small
                                            class="small mb-0 bg-primary rounded-pill px-3 py-1 d-inline-block text-white status-barang">Kehilangan</small>
                                    @else
                                        <small
                                            class="small mb-0 bg-success rounded-pill px-3 py-1 d-inline-block text-white status-barang">Ditemukan</small>
                                    @endif
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
                        <p hidden class="id_postingan">{{ $postingan_diajukan->id_postingan }}</p>
                        <div class="card-top d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center gap-2">
                                {{-- <i class="fa-solid fa-user small"></i> --}}
                                <img src="{{ $postingan_diajukan->akun->getImageURL() }}" alt=""
                                    class="img-fluid rounded-circle foto_barang" width="35">
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
                                        <a href="#" class="btnEditPost rounded-top dropdown-item small py-2"
                                            data-bs-toggle="modal" data-bs-target="#editPost"><i
                                                class="fa-regular fa-pen-to-square"></i> Edit</a>
                                    </li>
                                    <li>
                                        <form
                                            action="{{ route('postingan.delete', $postingan_diajukan->id_postingan) }}"
                                            method="POST" class="dropdown-item rounded-bottom">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="hapus" value=1>
                                            <button type="submit"
                                                class="rounded-bottom btn small px-0 py-1 d-flex align-items-center gap-1">
                                                <i class="fa-regular fa-trash-can"></i>
                                                <small>Hapus</small>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <p class="mb-0 small px-3 py-2">2 hari yang lalu</p> --}}
                        <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPost">
                            <img src="{{ $postingan_diajukan->getImageURL() }}" alt=""
                                class="img-fluid rounded-0 foto_barang">
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fs-18 fw-bold mb-0">{{ $postingan_diajukan->judul_postingan }}</p>
                            <p class="mb-2">{{ $postingan_diajukan->deskripsi_postingan }}</p>
                            <div class="row align-items-center mt-1">
                                <div class="col">
                                    <p class="m-0 small">{{ $postingan_diajukan->lokasi_disimpan }}</p>
                                </div>
                                <div class="col d-flex align-items-center">
                                    @if (is_null($postingan_diajukan->tgl_ditemukan) and is_null($postingan_diajukan->lokasi_ditemukan))
                                        <small
                                            class="small mb-0 bg-primary rounded-pill px-3 py-1 d-inline-block text-white status-barang">Kehilangan</small>
                                    @else
                                        <small
                                            class="small mb-0 bg-success rounded-pill px-3 py-1 d-inline-block text-white status-barang">Ditemukan</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
