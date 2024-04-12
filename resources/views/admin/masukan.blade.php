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
                <i class='fa-solid fa-comment-dots fs-1'></i>
                <p class="text-muted mt-3">Tidak ada masukan dari pengguna</p>
            </div>
        @endif
        @foreach ($masukans as $masukan)
            <li class="{{ $masukan->baca == 0 ? 'unread' : 'read' }} rounded-3 p-3 shadow-sm">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold m-0">{{ $masukan->akun->nama_akun }}</p>
                    <div>
                        @if ($masukan->faq == 1)
                            <small class="me-1">
                                <i class="fa-solid fa-circle-question"></i>
                                FAQ |
                            </small>
                        @endif
                        <small class="muted text-end">
                            {{ Carbon\Carbon::parse($masukan->created_at)->format('H:i') }} -
                            {{ Carbon\Carbon::parse($masukan->created_at)->translatedFormat('d F Y') }}
                            {{-- {{ Carbon\Carbon::parse($masukan->created_at)->translatedFormat('d F Y') }} --}}
                        </small>
                    </div>
                </div>
                <hr class="my-2">
                <div class="d-flex justify-content-between align-items-start">
                    <p class="m-0">{{ $masukan->pesan }}</p>
                    <div class="d-flex gap-3">
                        <form action="{{ route('masukan.destroy', $masukan->id_masukan) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="appear-icon hapus h-100 btn btn-sm fw-bold btn-outline-primary rounded-pill px-3 py-1">
                                <small class="d-flex align-items-center gap-1">
                                    <i class="fa-regular fa-trash-can" style="font-size: 16px"></i>
                                </small>
                            </button>
                        </form>
                        @if (!$masukan->jawaban)
                            <button class="btnToggle btnBalas btn btn-sm fw-bold rounded-pill px-3 py-1"
                                onclick="buttonToggle(this , 'balas')">
                                <small class="d-flex align-items-center gap-1">Balas</small>
                            </button>
                        @else
                            @if (!$masukan->faq)
                                <form action="{{ route('masukan.update', $masukan->id_masukan) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value=1 name="faq">
                                    <button type="submit"
                                        class="btnToggle btn btn-sm appear-icon fw-bold rounded-pill px-3 py-1">
                                        <small class="d-flex align-items-center gap-1">+ FAQ</small>
                                    </button>
                                </form>
                            @endif
                            <button class="btnToggle btn btn-sm fw-bold rounded-pill px-3 py-1"
                                onclick="buttonToggle(this, 'ubah')">
                                <small class="d-flex align-items-center gap-1">Ubah</small>
                            </button>
                        @endif
                    </div>
                </div>
                <div class="mt-2 balas-container {{ $masukan->jawaban ? '' : 'd-none' }}">
                    <p class="mb-0 fw-bold">Balas:</p>
                    <form action="{{ route('masukan.update', $masukan->id_masukan) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input value="{{ $masukan->jawaban ? $masukan->jawaban : '' }}" type="text"
                            class="bg-white d-block w-100 mb-3" id="jawaban" name="jawaban" disabled>
                        <button type="button" onclick="closeToggle(this)"
                            class="d-none btnBatal btn btn-sm fw-bold btn-outline-secondary rounded-pill px-3 py-1 me-2">
                            <small class="d-flex align-items-center gap-1">Batal</small>
                        </button>
                        <button type="submit"
                            class="btnKirim btn btn-sm fw-bold btn-primary rounded-pill px-3 py-1 d-none">
                            <small class="d-flex align-items-center gap-1">Kirim</small>
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- TOAST --}}
    @if (session()->has('jawaban'))
        <div class="toast-container position-fixed bottom-0 end-0 m-4 mb-5">
            <div id="liveToast" class="toast rounded-pill border-primary px-3 shadow" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="toast-body text-primary fw-bold">
                    {{ session()->get('jawaban') }}
                </div>
            </div>
        </div>
    @endif
    <script>
        // const btnBalass = document.querySelectorAll('.btnBalas');
        // btnBalass.forEach(btnBalas => {
        //     btnBalas.addEventListener("click", function() {
        //         this.classList.toggle('btnBalas')
        //         this.classList.toggle('buttonActive')
        //         this.parentElement.parentElement.nextElementSibling.classList.toggle('d-none');
        //         // const btnBatal = this.parentElement.parentElement.nextElementSibling.querySelector('.btnBatal');
        //     })
        // })


        function buttonToggle(e, nama) {
            if (nama == 'balas') {
                e.parentElement.parentElement.nextElementSibling.classList.toggle('d-none')
                openToggle(e);
            } else if (nama == 'ubah' && e.parentElement.parentElement.nextElementSibling.querySelector('.btnBatal')
                .classList.contains('d-none')) {
                openToggle(e);
            } else {
                e.classList.toggle('buttonActive')
                const inputJawaban = e.parentElement.parentElement.nextElementSibling.querySelector('#jawaban');
                const oldJawaban = inputJawaban.value;
                const panjang = inputJawaban.value.length;
                e.parentElement.parentElement.nextElementSibling.querySelector('.btnBatal').classList.toggle('d-none');
                e.parentElement.parentElement.nextElementSibling.querySelector('.btnKirim').classList.toggle('d-none');
                inputJawaban.disabled = true;
                inputJawaban.blur();
                // closeToggle(e);
            }
        }

        function openToggle(e) {
            e.classList.toggle('buttonActive')
            const inputJawaban = e.parentElement.parentElement.nextElementSibling.querySelector('#jawaban');
            const oldJawaban = inputJawaban.value;
            const panjang = inputJawaban.value.length;
            e.parentElement.parentElement.nextElementSibling.querySelector('.btnBatal').classList.toggle('d-none');
            e.parentElement.parentElement.nextElementSibling.querySelector('.btnKirim').classList.toggle('d-none');
            inputJawaban.disabled = false;
            inputJawaban.setSelectionRange(panjang, panjang);
            inputJawaban.focus();
        }

        function closeToggle(e) {
            e.parentElement.parentElement.previousElementSibling.querySelector('.btnToggle').click();
            // e.parentElement.parentElement.previousElementSibling.querySelector('.btnToggle').classList.toggle(
            //     'buttonActive')
            // const panjang = inputJawaban.value.length;
            // e.nextElementSibling.classList.toggle('d-none');
            // e.classList.toggle('d-none');
            // inputJawaban.disabled = true;
            // inputJawaban.blur();
        }
    </script>

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
@endsection
