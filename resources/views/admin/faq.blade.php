@extends('layouts.admin')
@section('head')
    <link rel="stylesheet" href="css/masukan.css">
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-1">
        <div>
            <div class="d-flex align-items-center gap-2">
                <h3 class="fw-black mb-0">Frequently Asked Question</h3>
                @if ($faqs->count())
                    <small class="counter-postingan bg-primary rounded-pill text-white">{{ $faqs->count() }}</small>
                @endif
            </div>
            <p class="fs-18">Pertanyaan yang sering diajukan</p>
        </div>
        @if ($faqs->count())
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
                                href="{{ $filter == 'Terbaru' ? 'faq?filter=terlama' : 'faq' }}">{{ $filter_list }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </div>
    {{-- <ul class="list-unstyled d-flex flex-column gap-3">
        @if (!$faqs->count())
            <div class="text-center mt-5 pt-4">
                <i class='fa-solid fa-circle-question display-1'></i>
                <p class="text-muted mt-3">Tidak ada FAQ</p>
            </div>
        @endif
        @foreach ($faqs as $faq)
            <li class="unread rounded-3 p-3 shadow-sm">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold m-0">{{ $faq->akun->nama_akun }}</p>
                    <small class="muted">
                        {{ Carbon\Carbon::parse($faq->created_at)->format('H:i') }} -
                            {{ Carbon\Carbon::parse($faq->created_at)->translatedFormat('d F Y') }}
                    </small>
                </div>
                <hr class="my-2">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p>{{ $faq->pesan }}</p>
                        <p class="fw-bold m-0">Jawaban</p>
                        <p class="m-0">{{ $faq->jawaban }}</p>
                    </div>
                    <div class="d-flex flex-column flex-lg-row gap-1 ps-2">
                        <button class="btn btn-sm fw-bold btn-outline-primary rounded-pill px-3 py-1"><i
                                class="fa-regular fa-trash-can"></i></button>
                        <button class="btn btn-sm fw-bold btn-primary rounded-pill px-3 py-1 ms-1"><i
                                class="fa-solid fa-pen-to-square"></i></button>
                    </div>
                </div>
            </li>
        @endforeach
    </ul> --}}
    <ul class="list-unstyled d-flex flex-column gap-3">
        @if (!$faqs->count())
            <div class="text-center mt-5 pt-4">
                <i class='fa-solid fa-circle-question fs-1'></i>
                <p class="text-muted mt-3">Tidak ada FAQ</p>
            </div>
        @endif
        @foreach ($faqs as $faq)
            <li class="{{ $faq->baca == 0 ? 'unread' : 'read' }} rounded-3 p-3 shadow-sm">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold m-0">{{ $faq->akun->nama_akun }}</p>
                    <div>
                        <small class="muted text-end">
                            {{ Carbon\Carbon::parse($faq->created_at)->format('H:i') }} -
                            {{ Carbon\Carbon::parse($faq->created_at)->translatedFormat('d F Y') }}
                            {{-- {{ Carbon\Carbon::parse($faq->created_at)->translatedFormat('d F Y') }} --}}
                        </small>
                    </div>
                </div>
                <hr class="my-2">
                <div class="d-flex justify-content-between align-items-start">
                    <p class="m-0">{{ $faq->pesan }}</p>
                    <div class="d-flex gap-3">
                        <form action="{{ route('masukan.destroy', $faq->id_masukan) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="appear-icon hapus h-100 btn btn-sm fw-bold btn-outline-primary rounded-pill px-3 py-1">
                                <small class="d-flex align-items-center gap-1">
                                    <i class="fa-regular fa-trash-can" style="font-size: 16px"></i>
                                </small>
                            </button>
                        </form>
                        @if (!$faq->jawaban)
                            <button class="btnToggle btnBalas btn btn-sm fw-bold rounded-pill px-3 py-1"
                                onclick="buttonToggle(this , 'balas')">
                                <small class="d-flex align-items-center gap-1">Balas</small>
                            </button>
                        @else
                            <form action="{{ route('masukan.update', $faq->id_masukan) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value=0 name="faqOut">
                                <button type="submit"
                                    class="btnToggle btn btn-sm appear-icon fw-bold rounded-pill px-3 py-1">
                                    <small class="d-flex align-items-center gap-1">- FAQ</small>
                                </button>
                            </form>
                            <button class="btnToggle btnUbah btn btn-sm fw-bold rounded-pill px-3 py-1"
                                onclick="buttonToggle(this, 'ubah')">
                                <small class="d-flex align-items-center gap-1">Ubah</small>
                            </button>
                        @endif
                    </div>
                </div>
                <div class="mt-2 balas-container {{ $faq->jawaban ? '' : 'd-none' }}">
                    <p class="mb-0 fw-bold">Balas:</p>
                    <form action="{{ route('masukan.update', $faq->id_masukan) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-floating border-0 p-0">
                            <textarea class="form-control p-0 border-0 bg-white" spellcheck="false" id="jawaban" name="jawaban" disabled
                                style="resize: none; overflow:hidden">{{ $faq->jawaban ? $faq->jawaban : '' }}</textarea>
                            {{-- <label for="floatingTextarea">Comments</label> --}}
                        </div>
                        {{-- <input value="{{ $faq->jawaban ? $faq->jawaban : '' }}" type="text"
                            class="bg-white d-block w-100 mb-3" id="jawaban" name="jawaban" disabled> --}}
                        <button type="button" onclick="closeToggle(this)"
                            class="mt-3 d-none btnBatal btn btn-sm fw-bold btn-outline-secondary rounded-pill px-3 py-1 me-2">
                            <small class="d-flex align-items-center gap-1">Batal</small>
                        </button>
                        <button type="submit"
                            class="mt-3 btnKirim btn btn-sm fw-bold btn-primary rounded-pill px-3 py-1 d-none">
                            <small class="d-flex align-items-center gap-1">Kirim</small>
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
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
            e.parentElement.parentElement.previousElementSibling.querySelector('.btnUbah').click();
            // e.parentElement.parentElement.previousElementSibling.querySelector('.btnToggle').classList.toggle(
            //     'buttonActive')
            // const panjang = inputJawaban.value.length;
            // e.nextElementSibling.classList.toggle('d-none');
            // e.classList.toggle('d-none');
            // inputJawaban.disabled = true;
            // inputJawaban.blur();
        }

        document.getElementById('jawaban').addEventListener('keyup', function() {
            this.style.overflow = 'hidden';
            this.style.height = 0;
            this.style.height = this.scrollHeight + 'px';
        }, false);

        const inputJawaban = document.getElementById('jawaban');
        inputJawaban.style.overflow = 'hidden';
        inputJawaban.style.height = 0;
        inputJawaban.style.height = inputJawaban.scrollHeight + 'px';
    </script>
@endsection
