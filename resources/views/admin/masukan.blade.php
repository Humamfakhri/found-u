@extends('layouts.admin')
@section('head')
    <link rel="stylesheet" href="css/masukan.css">
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <div class="d-flex align-items-center gap-2">
                <h3 class="fw-black mb-0">Masukan</h3>
                @if ($masukans->count())
                    <small class="counter-postingan bg-primary rounded-pill text-white">{{ $masukans->count() }}</small>
                @endif
            </div>
            <p class="fs-18">Kritik, Saran, atau Pertanyaan dari Pengguna</p>
        </div>
        @if ($masukans->count())
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
                                href="{{ $filter == 'Terbaru' ? 'masukan?filter=terlama' : 'masukan' }}">{{ $filter_list }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </div>
    <ul class="list-unstyled d-flex flex-column gap-3">
        @if (!$masukans->count())
            <div class="text-center mt-5 pt-4">
                <i class='fa-solid fa-comment-dots display-1'></i>
                <p class="text-muted mt-3">Tidak ada masukan dari pengguna</p>
            </div>
        @endif
        @foreach ($masukans as $masukan)
            <li class="{{ $masukan->baca == 0 ? 'unread' : 'read' }} rounded-3 p-3 shadow-sm">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold m-0">{{ $masukan->akun->nama_akun }}</p>
                    <small class="muted text-end">
                        {{ Carbon\Carbon::parse($masukan->created_at)->format('H:i') }} |
                        {{ Carbon\Carbon::parse($masukan->created_at)->format('Y-m-d') ==Carbon\Carbon::now()::parse($masukan->created_at)->format('Y-m-d')? 'Hari ini': Carbon\Carbon::parse($masukan->created_at)->format('Y-m-d') }}
                    </small>
                </div>
                <hr class="my-2">
                <div class="d-flex justify-content-between align-items-start">
                    <p class="m-0">{{ $masukan->pesan }}</p>
                    <div class="d-flex gap-3">
                        <form action="{{ route('masukan.destroy', $masukan->id_masukan) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="hapus h-100 btn btn-sm fw-bold btn-outline-primary rounded-pill px-3 py-1"><small
                                    class="d-flex align-items-center gap-1"><i class="fa-regular fa-trash-can"
                                        style="font-size: 16px"></i></small></button>
                        </form>
                        <button class="btnBalas btn btn-sm fw-bold btn-outline-secondary rounded-pill px-3 py-1">
                            <small class="d-flex align-items-center gap-1">Balas</small>
                        </button>
                    </div>
                </div>
                <div class="mt-2 balas-container d-none">
                    <p class="mb-0 fw-bold">Balas:</p>
                    <form>
                        <input type="text" class="d-block w-100 mb-3" id="jawaban">
                        <button class="btn btn-sm fw-bold btn-outline-secondary rounded-pill px-3 py-1 me-2">
                            <small class="d-flex align-items-center gap-1">Batal</small>
                        </button>
                        <button type="submit" class="btn btn-sm fw-bold btn-primary rounded-pill px-3 py-1">
                            <small class="d-flex align-items-center gap-1">Kirim</small>
                        </button>
                        {{-- <button type="submit" class="btn btn-primary btn-sm rounded-pill px-3">Kirim</button> --}}
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    <script>
        const btnBalass = document.querySelectorAll('.btnBalas');
        btnBalass.forEach(btnBalas => {
            btnBalas.addEventListener("click", function() {
                this.classList.toggle('btn-outline-secondary')
                this.classList.toggle('btn-secondary')
                this.parentElement.parentElement.nextElementSibling.classList.toggle('d-none');
            })
        })
    </script>
@endsection
