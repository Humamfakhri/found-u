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

    <h3 class="mt-5 fw-black mb-0">Postingan Diajukan</h3>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="fs-16-18 mb-0">Postingan yang membutuhkan konfirmasi.</p>
        @if ($postingans_diajukan->count())
            <div class="filter d-flex gap-4">
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle fs-10-14" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $filter }}
                        <i class="ms-2 fa-solid fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu rounded-4 py-0 rounded-pill">
                        <li class="rounded-pill">
                            <a class="rounded-pill dropdown-item fs-10-14"
                                href="{{ $filter == 'Terbaru' ? 'dashboard?filter=terlama' : 'dashboard' }}">{{ $filter_list }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </div>
    @if (!$postingans_diajukan->count())
        <div class="text-center mt-5 pt-4">
            <i class='fa-solid fa-inbox fs-1'></i>
            <p class="text-muted mt-3">Tidak ada postingan dalam pengajuan</p>
        </div>
    @endif
    <div class="row g-3 g-md-4">
        @foreach ($postingans_diajukan as $postingan_diajukan)
            <div class="col-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-content d-flex flex-column h-100">
                        @if (is_null($postingan_diajukan->tgl_ditemukan) and is_null($postingan_diajukan->lokasi_ditemukan))
                            <p hidden class="statusBarangSource">Kehilangan</p>
                        @else
                            <p hidden class="statusBarangSource">Ditemukan</p>
                        @endif
                        <p hidden class="idSource">{{ $postingan_diajukan->id_postingan }}</p>
                        <p hidden class="jamPublikasiSource">{{ Carbon\Carbon::parse($postingan_diajukan->tgl_publikasi)->format('H:i') }}</p>
                        <p hidden class="hariPublikasiSource">{{ Carbon\Carbon::parse($postingan_diajukan->tgl_publikasi)->translatedFormat('d F Y') }}</p>
                        {{-- <p hidden class="deskripsi_postingan">{{ $postingan_diajukan->deskripsi_postingan }}</p> --}}
                        <p hidden class="lokasiDitemukanSource">{{ $postingan_diajukan->lokasi_ditemukan ? $postingan_diajukan->lokasi_ditemukan : '-' }}</p>
                        <p hidden class="lokasiDisimpanSource">{{ $postingan_diajukan->lokasi_disimpan ? $postingan_diajukan->lokasi_disimpan : '-' }}</p>
                        <p hidden class="tanggalDitemukanSource">{{ $postingan_diajukan->tgl_ditemukan ? Carbon\Carbon::parse($postingan_diajukan->tgl_ditemukan)->translatedFormat('d F Y') : '-' }}</p>
                        <p hidden class="noTelpPengajuSource">{{ $postingan_diajukan->no_telp }}</p>
                        <div class="card-top d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center gap-2">
                                {{-- <i class="fa-solid fa-user small"></i> --}}
                                <img src="{{ $postingan_diajukan->akun->getImageURL() }}" alt="Foto Profil" class="img-fluid rounded-circle" width="35">
                                <div class="d-flex flex-column gap-0 g-0">
                                    <p class="mb-0 p-0 fw-semibold small nama_akun pengajuSource">
                                        {{ $postingan_diajukan->akun->nama_akun }}</p>
                                    <div class="d-flex gap-1">
                                        <small
                                            class="m-0 p-0 fs-12">{{ Carbon\Carbon::parse($postingan_diajukan->created_at)->diffForHumans(null, true) . ' lalu' }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPost">
                            <img src="{{ $postingan_diajukan->getImageURL() }}" alt="" class="img-fluid rounded-0 imageSource">
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                            <p class="namaBarangSource flex-grow-1 fs-16-18 fw-bold mb-0">{{ $postingan_diajukan->judul_postingan }}</p>
                            <p class="mb-2 deskripsiSource fs-14-16">{{ $postingan_diajukan->deskripsi_postingan }}</p>
                            <div class="row align-items-center mt-1">
                                <div class="col-1">
                                    <i class="fa-solid fa-location-dot fs-10-14"></i>
                                </div>
                                <div class="col">
                                    <p class="m-0 fs-10-14 lokasiKehilanganSource">{{ $postingan_diajukan->lokasi_kehilangan ? $postingan_diajukan->lokasi_kehilangan : '-' }}</p>
                                </div>
                            </div>
                            <div class="row align-items-center mt-1">
                                <div class="col-1">
                                    <i class="fa-regular fa-calendar"></i>
                                </div>
                                <div class="col">
                                    <p class="m-0 fs-10-14 tanggalKehilanganSource">
                                        {{ $postingan_diajukan->tgl_kehilangan ? Carbon\Carbon::parse($postingan_diajukan->tgl_kehilangan)->translatedFormat('d F Y') : '-' }}
                                    </p>
                                </div>
                            </div>
                            {{-- <hr class="mb-0 p-0"> --}}
                        </div>
                    </div>
                    <div class="row g-2 g-lg-3 p-3 pt-0">
                        <form action="{{ route('postingan.update', $postingan_diajukan->id_postingan) }}" method="POST"
                            class="col col-lg-6">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="tolak">
                            <button type="submit"
                                class="w-100 btn btn-outline-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-1">
                                <small class="fs-10-14">Tolak</small>
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </form>
                        <form action="{{ route('postingan.update', $postingan_diajukan->id_postingan) }}" method="POST"
                            class="col col-lg-6">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="publikasi">
                            <button type="submit"
                                class="w-100 btn btn-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-1">
                                <small class="fs-10-14">Publikasi</small>
                                <i class="fa-solid fa-check"></i>
                            </button>
                        </form>
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

    {{-- <script src="/js/lihatPostDiajukan.js"></script> --}}

    {{-- Alert Success Login --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (Session::get('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "Login Berhasil"
            });
        </script>
    @endif

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
@endsection
