@extends('layouts.default')
@section('head')
    <link href="{{ asset('/css/tentang.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="hero-tentang" id="hero-tentang">
        <div class="container">
            <div class="row gx-lg-5 gy-2">
                <div class="col-lg">
                    <h2 class="fw-black">Hilang & Temukan, Mudah dengan FOUND-U!</h2>
                    <p>Tidak jarang, mahasiswa ataupun civitas Telkom University meninggalkan barang mereka di suatu tempat.
                        FOUND-U dibuat untuk memudahkan akses dan pencarian bagi civitas Telkom University yang sedang
                        kehilangan barang ataupun menemukan barang temuan di suatu tempat.</p>
                </div>
                <div class="col-lg text-center text-lg-start">
                    <img src="/img/tentang.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="alasan">
        <div class="container text-center">
            <h2 class="fw-black">Kenapa Harus Menggunakan <span class="text-primary">FOUND-U</span>?</h2>
            <div class="row justify-content-center mt-3 mt-md-5 g-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card border-0 py-4 px-3 rounded-4 h-100">
                        <img src="/img/tentang-cepat.svg" alt="">
                        <h4 class="mt-4 fw-bold">Cepat</h4>
                        <small class="mt-1">Fitur search untuk mencari informasi secara cepat dan akurat.</small>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card border-0 py-4 px-3 rounded-4 h-100">
                        <img src="/img/tentang-akses.svg" alt="">
                        <h4 class="mt-4 fw-bold">Mudah diakses</h4>
                        <small class="mt-1">Akses dan ajukan postingan kehilangan dengan mudah.</small>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card border-0 py-4 px-3 rounded-4 h-100">
                        <img src="/img/tentang-uptodate.svg" alt="">
                        <h4 class="mt-4 fw-bold">Up-to-date</h4>
                        <small class="mt-1">Postingan selalu dikelola dan di-update oleh admin.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="masukan">
        <div class="bg-white">
            <img src="/img/tentang-masukan.svg" alt="" class="img-fluid wave-masukan">
        </div>
        <div class="container">
            <div class="section-title mt-3 mt-md-0">
                <h2 class="fw-black">Punya <span class="text-primary">Kritik</span>, <span
                        class="text-primary">Saran</span>, atau <span class="text-primary">Pertanyaan</span>?</h2>
                <p class="lead fw-normal">Kami selalu menerima masukan Anda agar FOUND-U menjadi lebih baik lagi.</p>
            </div>
            <form method="POST" action="{{ route('masukan.store') }}">
                @csrf
                @if (Auth::check())
                    <div class="form-floating mt-5">
                        <textarea class="form-control" placeholder="Pesan" name="pesan" id="pesan" style="height: 100px"></textarea>
                        <label for="pesan">Pesan</label>
                    </div>
                    <div class="text-end">
                        <button type="submit" name="submit"
                            class="btn bg-primary text-white fw-bold mt-3 rounded-pill px-4 py-1">Kirim
                            <i class="text-white ms-1 fa-regular fa-paper-plane"></i>
                        </button>
                    </div>
                @elseif (!Auth::check())
                    <div class="form-floating mt-lg-4">
                        <textarea class="form-control" placeholder="Pesan" name="pesan" id="pesan" style="height: 100px" disabled></textarea>
                        <label for="pesan" class="text-muted">(Silakan login terlebih dahulu untuk dapat mengirimkan masukan)</label>
                    </div>
                    <div class="text-end">
                        <button type="submit" name="submit"
                            class="btn bg-primary text-white fw-bold mt-3 rounded-pill px-4 py-1" disabled>Kirim
                            <i class="text-white ms-1 fa-regular fa-paper-plane"></i>
                        </button>
                    </div>
                @endif
            </form>
            <div class="row align-items-center g-lg-5 hubungi-kami">
                <div class="col text-end">
                    <img src="/img/mailbox.svg" alt="" class="img-fluid px-2 px-lg-0">
                </div>
                <div class="col">
                    <h2 class="fw-black">atau <span class="text-primary d-block">Hubungi Kami</span></h2>
                    <ul class="m-0 p-0 tentang-sosmed list-unstyled mt-4">
                        <li>
                            <a href="#" class="d-inline-flex align-items-center px-3 py-1 rounded-pill">
                                <i class="fs-3 fa-brands fa-whatsapp"></i>
                                <p class="m-0">+62 82112341234</p>
                            </a>
                        </li>
                        <li class="mt-3">
                            <a href="#" class="d-inline-flex align-items-center px-3 py-1 rounded-pill">
                                <i class="fs-5 fa-solid fa-phone"></i>
                                <p class="m-0">+62 82222098765</p>
                            </a>
                        </li>
                        <li class="mt-3">
                            <a href="#" class="d-inline-flex align-items-center px-3 py-1 rounded-pill">
                                <i class="fs-5 fa-solid fa-envelope"></i>
                                <p class="m-0">found_u@gmail.com</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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
