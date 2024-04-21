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

    {{-- DITEMUKAN --}}
    @if ($postingans_ditemukan->count())
        <section class="ditemukan cards-container" style="margin-top: 6rem">
            <div class="container my-5">
                <div class="section-title mb-lg-3">
                    <div class="line"></div>
                    <div class="d-md-flex justify-content-between align-items-center">
                        <di>
                            <h3 class="mt-3 fw-black mb-0">DITEMUKAN</h3>
                            <p class="fs-18 fw-light mb-0">Barang yang sudah ditemukan dan disimpan di fakultas tertentu.
                            </p>
                        </di>
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-between d-md-block mt-4">
                            @if ($jml_postingans_ditemukan > 4)
                                @if (isset($_GET['filter']))
                                    @if (!$_GET['filter'] == 'postingan_saya')
                                        <a href="/ditemukan"><button
                                                class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                                Semua</button></a>
                                    @endif
                                @else
                                    <a href="/ditemukan"><button
                                            class="btn btn-sm btn-outline-primary rounded-pill lihat-semua px-3 py-1">Lihat
                                            Semua</button></a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row pt-2 g-3 g-md-4">
                    @foreach ($postingans_ditemukan as $postingan_ditemukan)
                        <div class="col-6 col-lg-3">
                            <div class="card h-100">
                                <div class="card-content">
                                    <p hidden class="idAkunSource">{{ $postingan_ditemukan->id_akun }}</p>
                                    <p hidden class="idSource">{{ $postingan_ditemukan->id_postingan }}</p>
                                    <p hidden class="tgl_ajukan_time">
                                        {{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->format('H:i') }}
                                    </p>
                                    <p hidden class="tgl_ajukan_date">
                                        {{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->translatedFormat('d F Y') }}
                                    </p>
                                    <p hidden class="lokasi_kehilangan">
                                        {{ $postingan_ditemukan->lokasi_kehilangan ? $postingan_ditemukan->lokasi_kehilangan : null }}
                                    </p>
                                    <p hidden class="lokasi_ditemukan">
                                        {{ $postingan_ditemukan->lokasi_ditemukan ? $postingan_ditemukan->lokasi_ditemukan : null }}
                                    </p>
                                    <p hidden class="lokasi_disimpan">
                                        {{ $postingan_ditemukan->lokasi_disimpan ? $postingan_ditemukan->lokasi_disimpan : null }}
                                    </p>
                                    <p hidden class="tgl_kehilangan">
                                        {{ $postingan_ditemukan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_ditemukan->tgl_kehilangan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="tgl_ditemukan">
                                        {{ $postingan_ditemukan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_ditemukan->tgl_ditemukan)->translatedFormat('d F Y') : null }}
                                    </p>
                                    <p hidden class="etgl_kehilangan">
                                        {{ $postingan_ditemukan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_ditemukan->tgl_kehilangan)->translatedFormat('Y-m-d') : '' }}
                                    </p>
                                    <p hidden class="etgl_ditemukan">
                                        {{ $postingan_ditemukan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_ditemukan->tgl_ditemukan)->translatedFormat('Y-m-d') : '' }}
                                    </p>
                                    <p hidden class="no_telp">{{ $postingan_ditemukan->no_telp }}</p>
                                    <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPostKehilangan">
                                        <img src="{{ $postingan_ditemukan->getImageURL() }}" alt=""
                                            class="img-fluid foto_barang">
                                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0 d-md-block flex-fill">
                                        <p class="judul_postingan fs-18 fw-bold mb-0">
                                            {{ $postingan_ditemukan->judul_postingan }}
                                        </p>
                                        <p class="mb-2 deskripsi_postingan">
                                            {{ $postingan_ditemukan->deskripsi_postingan }}
                                        </p>
                                        <div class="row align-items-center" hidden>
                                            <div class="col-1">
                                                <i class="small fa-solid fa-user"></i>
                                            </div>
                                            <div class="col">
                                                <p class="fs-10-14 m-0 nama_akun">
                                                    {{ $postingan_ditemukan->akun->nama_akun }}</p>
                                            </div>
                                        </div>
                                        @if ($postingan_ditemukan->lokasi_disimpan != null)
                                            <div class="row align-items-center mt-1">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-location-dot small"></i>
                                                </div>
                                                <div class="col">
                                                    @if (!is_null($postingan_ditemukan->lokasi_ditemukan) or !is_null($postingan_ditemukan->tgl_ditemukan))
                                                        <p class="m-0 small">{{ $postingan_ditemukan->lokasi_disimpan }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="px-3 pb-3">
                                        <hr class="my-1">
                                        <small
                                            class="muted fs-10-14">{{ Carbon\Carbon::parse($postingan_ditemukan->tgl_publikasi)->translatedFormat('d F Y') }}</small>
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
                <h5 class="fw-light text-center text-muted mt-5 pt-5">Tidak ada postingan barang ditemukan</h5>
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
