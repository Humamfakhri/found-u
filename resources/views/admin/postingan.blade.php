@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <div>
            <div class="d-flex align-items-center gap-2">
                <h3 class="fw-black mb-0">Postingan</h3>
                @if ($postingans_dipublikasi->count())
                    <small
                        class="counter-postingan bg-primary rounded-pill text-white">{{ $postingans_dipublikasi->count() }}</small>
                @endif
            </div>
            <p class="fs-18">Postingan yang ditayangkan dan dilihat pengguna.</p>
        </div>
        @if ($postingans_dipublikasi->count())
            <div class="filter d-flex gap-4">
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $filter }}
                        <i class="ms-2 fa-solid fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu rounded-4 py-0 rounded-pill">
                        <li class="rounded-pill">
                            <a class="rounded-pill dropdown-item small"
                                href="{{ $filter == 'Terbaru' ? 'postingan?filter=terlama' : 'postingan' }}">{{ $filter_list }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </div>
    <div class="row g-4">
        @if (!$postingans_dipublikasi->count())
            <div class="text-center mt-5 pt-4">
                <i class="text-muted fa-solid fa-box-open display-1"></i>
                <p class="text-muted mt-3">Tidak ada postingan ditayangkan</p>
            </div>
        @endif
        @foreach ($postingans_dipublikasi as $postingan_dipublikasi)
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-content">
                        <div class="card-top d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center gap-2">
                                {{-- <i class="fa-solid fa-user small"></i> --}}
                                <img src="/img/rigel.jpg" alt="" class="img-fluid rounded-circle" width="35">
                                <div class="d-flex flex-column gap-0 g-0">
                                    <p class="mb-0 p-0 fw-semibold small">{{ $postingan_dipublikasi->akun->nama_akun }}</p>
                                    <div class="d-flex gap-1">
                                        <small class="m-0 p-0 fs-12">Diposting:</small>
                                        <small class="m-0 p-0 fs-12">{{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->diffForHumans(null, true).' lalu'}}</small>
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
                                        <a class="rounded-top dropdown-item small py-2" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                    </li>
                                    <li>
                                        <a class="rounded-bottom dropdown-item small py-2" href="#"><i class="fa-regular fa-trash-can"></i> Hapus</a>
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
                            <p class="fs-18 fw-bold mb-0">{{ $postingan_dipublikasi->judul_postingan }}</p>
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
@endsection
