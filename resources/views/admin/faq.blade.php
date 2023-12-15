@extends('layouts.admin')
@section('head')
    <link rel="stylesheet" href="css/masukan.css">
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-1">
        <div>
            <h2 class="fw-black">Frequently Asked Question</h2>
            <p class="lead fw-normal">Pertanyaan yang sering diajukan</p>
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
                <small class="muted">19:59 - 23 Januari 2023</small>
            </div>
            <hr class="my-2">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p>Apa yang harus dilakukan jika pengguna ingin membuat postingan baru?</p>
                    <p class="fw-bold m-0">Jawaban</p>
                    <p class="m-0">Pengguna harus login terlebih dahulu lalu tekan “Ajukan Postingan” di halaman beranda.</p>
                </div>
                <div class="d-flex flex-column flex-lg-row gap-1 ps-2">
                    <button class="btn btn-sm fw-bold btn-outline-primary rounded-pill px-3 py-1"><i
                            class="fa-regular fa-trash-can"></i></button>
                    <button class="btn btn-sm fw-bold btn-primary rounded-pill px-3 py-1 ms-1"><i
                            class="fa-solid fa-pen-to-square"></i></button>
                </div>
            </div>
        </li>
        <li class="unread rounded-3 p-3 shadow-sm">
            <div class="d-flex align-items-center justify-content-between">
                <p class="fw-bold m-0">Andi Rimba Manggala Putra</p>
                <small class="muted">19:59 - 23 Januari 2023</small>
            </div>
            <hr class="my-2">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p>Apa yang harus dilakukan jika pengguna ingin membuat postingan baru?</p>
                    <p class="fw-bold m-0">Jawaban</p>
                    <p class="m-0">Pengguna harus login terlebih dahulu lalu tekan “Ajukan Postingan” di halaman beranda.</p>
                </div>
                <div class="d-flex flex-column flex-lg-row gap-1 ps-2">
                    <button class="btn btn-sm fw-bold btn-outline-primary rounded-pill px-3 py-1"><i
                            class="fa-regular fa-trash-can"></i></button>
                    <button class="btn btn-sm fw-bold btn-primary rounded-pill px-3 py-1 ms-1"><i
                            class="fa-solid fa-pen-to-square"></i></button>
                </div>
            </div>
        </li>
    </ul>
@endsection
