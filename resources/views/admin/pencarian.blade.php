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
                    <p hidden class="idSource">{{ $postingan_dipublikasi->id_postingan }}</p>
                    <p hidden class="jamPublikasiSource">
                        {{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->format('H:i') }}</p>
                    <p hidden class="hariPublikasiSource">
                        {{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->translatedFormat('d F Y') }}</p>
                    <p hidden class="lokasiKehilanganSource">
                        {{ $postingan_dipublikasi->lokasi_kehilangan ? $postingan_dipublikasi->lokasi_kehilangan : '-' }}
                    </p>
                    <p hidden class="lokasiDitemukanSource">
                        {{ $postingan_dipublikasi->lokasi_ditemukan ? $postingan_dipublikasi->lokasi_ditemukan : '-' }}
                    </p>
                    <p hidden class="lokasiDisimpanSource">
                        {{ $postingan_dipublikasi->lokasi_disimpan ? $postingan_dipublikasi->lokasi_disimpan : '-' }}
                    </p>
                    <p hidden class="tanggalKehilanganSource">
                        {{ $postingan_dipublikasi->tgl_kehilangan ? Carbon\Carbon::parse($postingan_dipublikasi->tgl_kehilangan)->translatedFormat('d F Y') : '-' }}
                    </p>
                    <p hidden class="tanggalDitemukanSource">
                        {{ $postingan_dipublikasi->tgl_ditemukan ? Carbon\Carbon::parse($postingan_dipublikasi->tgl_ditemukan)->translatedFormat('d F Y') : '-' }}
                    </p>
                    <p hidden class="etgl_kehilangan">
                        {{ $postingan_dipublikasi->tgl_kehilangan ? Carbon\Carbon::parse($postingan_dipublikasi->tgl_kehilangan)->translatedFormat('Y-m-d') : '' }}
                    </p>
                    <p hidden class="etgl_ditemukan">
                        {{ $postingan_dipublikasi->tgl_ditemukan ? Carbon\Carbon::parse($postingan_dipublikasi->tgl_ditemukan)->translatedFormat('Y-m-d') : '' }}
                    </p>
                    <p hidden class="noTelpPengajuSource">{{ $postingan_dipublikasi->no_telp }}</p>
                    <div class="card-top d-flex align-items-center justify-content-between px-3 py-2">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{ $postingan_dipublikasi->akun->getImageURL() }}" alt=""
                                class="img-fluid rounded-circle" width="35">
                            <div class="d-flex flex-column gap-0 g-0">
                                <p class="mb-0 p-0 fw-semibold small pengajuSource">
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
                    <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPost">
                        <img src="{{ $postingan_dipublikasi->getImageURL() }}" alt=""
                            class="img-fluid rounded-0 imageSource">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (is_null($postingan_dipublikasi->tgl_ditemukan) and is_null($postingan_dipublikasi->lokasi_ditemukan))
                            <small
                                class="small mb-0 bg-primary rounded-pill px-3 py-1 d-inline-block text-white statusBarangSource">Kehilangan</small>
                        @else
                            <small
                                class="small mb-0 bg-success rounded-pill px-3 py-1 d-inline-block text-white statusBarangSource">Ditemukan</small>
                        @endif
                        <p class="namaBarangSource fs-18 fw-bold mb-0">{{ $postingan_dipublikasi->judul_postingan }}
                        </p>
                        <p class="mb-2 deskripsiSource">{{ $postingan_dipublikasi->deskripsi_postingan }}</p>
                        @if ($postingan_dipublikasi->lokasi_disimpan != null)
                            <div class="row align-items-center mt-1">
                                <div class="col-1">
                                    <i class="fa-solid fa-location-dot small"></i>
                                </div>
                                <div class="col">
                                    @if (!is_null($postingan_dipublikasi->lokasi_ditemukan) or !is_null($postingan_dipublikasi->tgl_ditemukan))
                                        <p class="m-0 small">{{ $postingan_dipublikasi->lokasi_disimpan }}</p>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
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
            <div class="card h-100">
                <div class="card-content">
                    <p hidden class="idSource">{{ $postingan_diajukan->id_postingan }}</p>
                    <p hidden class="jamPublikasiSource">
                        {{ Carbon\Carbon::parse($postingan_diajukan->tgl_publikasi)->format('H:i') }}</p>
                    <p hidden class="hariPublikasiSource">
                        {{ Carbon\Carbon::parse($postingan_diajukan->tgl_publikasi)->translatedFormat('d F Y') }}</p>
                    <p hidden class="lokasiKehilanganSource">
                        {{ $postingan_diajukan->lokasi_kehilangan ? $postingan_diajukan->lokasi_kehilangan : '-' }}
                    </p>
                    <p hidden class="lokasiDitemukanSource">
                        {{ $postingan_diajukan->lokasi_ditemukan ? $postingan_diajukan->lokasi_ditemukan : '-' }}
                    </p>
                    <p hidden class="lokasiDisimpanSource">
                        {{ $postingan_diajukan->lokasi_disimpan ? $postingan_diajukan->lokasi_disimpan : '-' }}
                    </p>
                    <p hidden class="tanggalKehilanganSource">
                        {{ $postingan_diajukan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_diajukan->tgl_kehilangan)->translatedFormat('d F Y') : '-' }}
                    </p>
                    <p hidden class="tanggalDitemukanSource">
                        {{ $postingan_diajukan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_diajukan->tgl_ditemukan)->translatedFormat('d F Y') : '-' }}
                    </p>
                    <p hidden class="etgl_kehilangan">
                        {{ $postingan_diajukan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_diajukan->tgl_kehilangan)->translatedFormat('Y-m-d') : '' }}
                    </p>
                    <p hidden class="etgl_ditemukan">
                        {{ $postingan_diajukan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_diajukan->tgl_ditemukan)->translatedFormat('Y-m-d') : '' }}
                    </p>
                    <p hidden class="noTelpPengajuSource">{{ $postingan_diajukan->no_telp }}</p>
                    <div class="card-top d-flex align-items-center justify-content-between px-3 py-2">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{ $postingan_diajukan->akun->getImageURL() }}" alt=""
                                class="img-fluid rounded-circle" width="35">
                            <div class="d-flex flex-column gap-0 g-0">
                                <p class="mb-0 p-0 fw-semibold small pengajuSource">
                                    {{ $postingan_diajukan->akun->nama_akun }}</p>
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
                    <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPost">
                        <img src="{{ $postingan_diajukan->getImageURL() }}" alt=""
                            class="img-fluid rounded-0 imageSource">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (is_null($postingan_diajukan->tgl_ditemukan) and is_null($postingan_diajukan->lokasi_ditemukan))
                            <small
                                class="small mb-0 bg-primary rounded-pill px-3 py-1 d-inline-block text-white statusBarangSource">Kehilangan</small>
                        @else
                            <small
                                class="small mb-0 bg-success rounded-pill px-3 py-1 d-inline-block text-white statusBarangSource">Ditemukan</small>
                        @endif
                        <p class="namaBarangSource fs-18 fw-bold mb-0">{{ $postingan_diajukan->judul_postingan }}
                        </p>
                        <p class="mb-2 deskripsiSource">{{ $postingan_diajukan->deskripsi_postingan }}</p>
                        @if ($postingan_diajukan->lokasi_disimpan != null)
                            <div class="row align-items-center mt-1">
                                <div class="col-1">
                                    <i class="fa-solid fa-location-dot small"></i>
                                </div>
                                <div class="col">
                                    @if (!is_null($postingan_diajukan->lokasi_ditemukan) or !is_null($postingan_diajukan->tgl_ditemukan))
                                        <p class="m-0 small">{{ $postingan_diajukan->lokasi_disimpan }}</p>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
@section('script')
    <script src="/js/editPost.js"></script>
@endsection