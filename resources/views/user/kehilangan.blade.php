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
                            href="{{ $filter == 'Terbaru' ? 'kehilangan?filter=terlama' : 'kehilangan' }}">{{ $filter_list }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}

    {{-- KEHILANGAN --}}
    @if ($postingans_kehilangan->count())
        <section class="kehilangan cards-container pb-0 pb-md-5" style="margin-top: 6rem">
            <div class="container my-5">
                <div class="section-title">
                    <div class="line"></div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="mt-3 fw-black mb-0">KEHILANGAN</h3>
                            <p class="fs-18 fw-light">Barang yang belum ditemukan.</p>
                        </div>
                        <div class="filter filter-semua d-flex gap-4">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $filter }}
                                    <i class="ms-2 fa-solid fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu rounded-4 py-0 rounded-pill">
                                    <li class="rounded-pill">
                                        <a class="rounded-pill dropdown-item small"
                                            href="{{ $filter == 'Terbaru' ? 'kehilangan?filter=terlama' : 'kehilangan' }}">{{ $filter_list }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-2 g-3 g-md-4">
                    @foreach ($postingans_kehilangan as $postingan_kehilangan)
                        <div class="col-6 col-lg-3">
                            <div class="card h-100">
                                <div class="card-content">
                                    <p hidden class="kategori">ditemukan</p>
                                    <p hidden class="lokasi_kehilangan">
                                        {{ $postingan_kehilangan->lokasi_kehilangan ? $postingan_kehilangan->lokasi_kehilangan : null }}
                                    </p>
                                    <p hidden class="lokasi_ditemukan">
                                        {{ $postingan_kehilangan->lokasi_ditemukan ? $postingan_kehilangan->lokasi_ditemukan : null }}
                                    </p>
                                    <p hidden class="lokasi_disimpan">
                                        {{ $postingan_kehilangan->lokasi_disimpan ? $postingan_kehilangan->lokasi_disimpan : null }}
                                    </p>
                                    <p hidden class="tgl_kehilangan">
                                        {{ $postingan_kehilangan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_kehilangan->tgl_kehilangan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="tgl_ditemukan">
                                        {{ $postingan_kehilangan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_kehilangan->tgl_ditemukan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="tgl_ditemukan">
                                        {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_ditemukan)->translatedFormat('d F Y') }}
                                    </p>
                                    <p hidden class="no_telp">{{ $postingan_kehilangan->no_telp }}</p>
                                    <p hidden class="tgl_ajukan_time">
                                        {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->format('H:i') }}</p>
                                    <p hidden class="tgl_ajukan_date">
                                        {{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->translatedFormat('d F Y') }}
                                    </p>
                                    <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPostKehilangan">
                                        <img src="{{ $postingan_kehilangan->getImageURL() }}" alt=""
                                            class="img-fluid foto_barang">
                                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    {{-- <div class="card-body d-none d-md-block"> --}}
                                    <div class="card-body">
                                        <p class="fs-16-18 fw-bold mb-0 judul_postingan">
                                            {{ $postingan_kehilangan->judul_postingan }}</p>
                                        <p class="fs-14-16 mb-2 deskripsi_postingan">
                                            {{ $postingan_kehilangan->deskripsi_postingan }}</p>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="small fa-solid fa-user"></i>
                                            </div>
                                            <div class="col">
                                                <p class="fs-10-14 m-0 nama_akun">
                                                    {{ $postingan_kehilangan->akun->nama_akun }}</p>
                                            </div>
                                        </div>
                                        {{-- <div class="row mt-1">
                                            <div class="col-1">
                                                <i class="small fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="col">
                                                <p class="small m-0 lokasi_disimpan">
                                                    {{ $postingan_kehilangan->lokasi_disimpan ? $postingan_kehilangan->lokasi_disimpan : null }}
                                                </p>
                                            </div>
                                        </div> --}}
                                        <hr class="my-2 mb-lg-2">
                                        <small
                                            class="muted fs-10-14">{{ Carbon\Carbon::parse($postingan_kehilangan->tgl_publikasi)->translatedFormat('d F Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <div class="container mt-5 pt-5 mt-md-5">
            <div class="text-center">
                <h5 class="fw-light text-center text-muted mt-5 pt-5">Tidak ada postingan barang hilang</h5>
                <i class="fa-solid fa-inbox fs-1 mt-2"></i>
            </div>
        </div>
    @endif

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
