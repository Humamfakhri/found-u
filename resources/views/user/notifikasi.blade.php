@extends('layouts.default')
@section('head')
    <link href="{{ asset('/css/notifikasi.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section>
        <div class="container min-h-100">
            <div class="page-title mb-3">
                <h3 class="fw-bold">Notifikasi & Riwayat</h3>
            </div>
            <ul class="p-0 d-flex flex-column gap-2 list-unstyled">
                @if ($notifikasis->count())
                    @foreach ($notifikasis as $notifikasi)
                        <li class="px-4 py-3 rounded-3 gap-2 {{ $notifikasi->baca ? '' : 'read' }}">
                            <div class="header d-flex align-items-center justify-content-between mb-1">
                                <h5 class="m-0 fw-bold">
                                    @if ($notifikasi->status == 1)
                                        Postingan telah diajukan
                                    @elseif ($notifikasi->status == 2)
                                        Postingan telah dipublikasi
                                    @elseif ($notifikasi->status == 3)
                                        Barangmu telah ditemukan
                                    @elseif ($notifikasi->status == 4)
                                        Postingan dibatalkan
                                    @endif
                                </h5>
                                <div class="time"><small class="text-muted">{{ $notifikasi->created_at }}</small></div>
                            </div>
                            <p class="m-0">
                                @if ($notifikasi->status == 1)
                                    Harap menunggu konfirmasi dari admin.
                                @elseif ($notifikasi->status == 2)
                                    Pengajuan postingan <b>{{ $notifikasi->postingan->judul_postingan }}</b> telah disetujui
                                    oleh admin.
                                @elseif ($notifikasi->status == 3)
                                    <b>{{ $notifikasi->postingan->judul_postingan }}</b> berhasil ditemukan. Segera ambil
                                    barangmu di lokasi yang tertera pada postingan.
                                    {{-- @elseif ($notifikasi->status == 4)
                            Postingan dibatalkan --}}
                                @endif
                            </p>
                        </li>
                    @endforeach
                @else
                    <div class="text-center">
                        <h5 class="fw-light text-center mt-5 pt-5">Tidak ada notifikasi & riwayat</h5>
                        <i class="fa-solid fa-clock-rotate-left fs-1 mt-2"></i>
                    </div>
                @endif

            </ul>
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
