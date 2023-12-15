@extends('layouts.admin')
@section('head')
    <link rel="stylesheet" href="css/masukan.css">
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-black">Masukan</h2>
            <p class="lead fw-normal">Kritik, Saran, atau Pertanyaan dari Pengguna</p>
        </div>
        <div class="filter d-flex gap-4">
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Urutkan
                    <i class="ms-2 fa-solid fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu rounded-4">
                    <li><a class="dropdown-item pe-0" href="#">Terbaru</a></li>
                    <li><a class="dropdown-item pe-0" href="#">Terlama</a></li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="list-unstyled d-flex flex-column gap-3">
        <li class="unread rounded-3 p-3 shadow-sm">
            <div class="d-flex align-items-center justify-content-between">
                <p class="fw-bold m-0">Andi Rimba Manggala Putra</p>
                <small class="muted">18:59 - 23 Januari 2023</small>
            </div>
            <hr class="my-2">
            <div class="d-flex justify-content-between align-items-start">
                <p class="m-0">Apa yang harus dilakukan jika pengguna ingin membuat postingan baru?</p>
                <button class="btn btn-sm fw-bold btn-outline-secondary rounded-pill px-3 py-1"><small class="d-flex align-items-center gap-1">Balas</small></button>
            </div>
        </li>
        <li class="read rounded-3 p-3 shadow-sm">
            <div class="d-flex align-items-center justify-content-between">
                <p class="fw-bold m-0">Andi Rimba Manggala Putra</p>
                <small class="muted">19:59 - 23 Januari 2023</small>
            </div>
            <hr class="my-2">
            <div class="d-flex justify-content-between align-items-start">
                <p>Apa yang harus dilakukan jika pengguna ingin membuat postingan baru?</p>
                <button class="btn btn-sm fw-bold btn-outline-secondary rounded-pill px-3 py-1"><small class="d-flex align-items-center gap-1"><i class="fa-solid fa-plus"></i> FAQ</small></button>
            </div>
            <p class="fw-bold m-0">Jawaban</p>
            <p class="m-0">Pengguna harus login terlebih dahulu lalu tekan “Ajukan Postingan” di halaman beranda.</p>
        </li>
    </ul>
@endsection
