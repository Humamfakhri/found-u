<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FOUND-U</title>
    {{-- GOOGLE FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- FONT AWESOME --}}
    <script src="https://kit.fontawesome.com/cce5ebab8a.js" crossorigin="anonymous"></script>
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body>
    @auth()
        <div class="floating-icon">
            <button type="button" class="btn border-0" data-bs-toggle="modal" data-bs-target="#buatPost">
                <i class="fs-1 text-primary fa-solid fa-circle-plus" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Buat Postingan"></i>
            </button>
        </div>
    @endauth
    <header>
        @include('includes.header')
    </header>
    <main style="min-height: 80vh">
        @yield('content')
        {{-- TOAST --}}
        {{-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> --}}
        @if (session()->has('success'))
            <div class="toast-container position-fixed bottom-0 start-0 m-4">
                <div id="liveToast" class="toast rounded-pill border-success px-3 shadow" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="toast-body text-success fw-bold">
                        {{ session()->get('success') }}
                    </div>
                </div>
            </div>
        @endif

        {{-- <div class="toast-container position-fixed bottom-0 start-0 m-4">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body px-3 text-white">
                    Berhasil Berhasil Berhasil
                </div>
            </div>
        </div> --}}

        {{-- POPUP BUAT POSTINGAN --}}
        <!-- Button trigger modal -->
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buatPost">
        Launch demo modal
    </button> --}}

        <!-- MODAL BUAT POSTINGAN -->
        <div class="modal fade-scale" id="buatPost" tabindex="-1" aria-labelledby="buatPostLabel" aria-hidden="true">
            <div class="buat-post-modal modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content rounded-4">
                    <div class="modal-header justify-content-center position-relative">
                        <h1 class="modal-title fs-4 text-center fw-bold" id="buatPostLabel">Buat Postingan Baru</h1>
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4 pb-0">
                        <form enctype="multipart/form-data" method="POST" action="{{ route('postingan.store') }}">
                            @csrf
                            <input type="hidden" name="status" value=1>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div>
                                        <label for="judul_postingan" class="form-label">Nama Barang <span
                                                class="text-primary">*</span></label>
                                        <input type="text" class="mandatory form-control rounded-pill"
                                            id="judul_postingan" name="judul_postingan"
                                            value="{{ old('judul_postingan') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="no_telp" class="form-label">No. Telepon Pemilik <span
                                                class="text-primary">*</span></label>
                                        <input type="tel" pattern="[0-9]*"
                                            class="mandatory form-control rounded-pill" id="no_telp" name="no_telp"
                                            value="{{ old('no_telp') }}">
                                        <small class="telp-error d-none text-danger d-block mt-2">* Hanya masukkan angka</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div>
                                        <label for="lokasi_kehilangan" class="form-label">Lokasi Terakhir</label>
                                        <input type="text" class="form-control rounded-pill" id="lokasi_kehilangan"
                                            name="lokasi_kehilangan" value="{{ old('lokasi_kehilangan') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="tanggal" class="form-label">Tanggal Kehilangan <span
                                                class="text-primary">*</span></label>
                                        <input type="date" class="mandatory form-control rounded-pill" id="tanggal"
                                            name="tanggal" value="{{ old('tanggal') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div>
                                        <label for="deskripsi_postingan" class="form-label">Deskripsi Barang</label>
                                        <textarea class="form-control rounded-4" id="deskripsi_postingan" name="deskripsi_postingan"
                                            value="{{ old('deskripsi_postingan') }}" style="height: 100px; resize: none"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="image" class="form-label">Foto Barang <span
                                                class="text-primary">*</span></label>
                                        <input type="file"
                                            class="mandatory input-file form-control rounded-pill @error('image') is-invalid @enderror"
                                            id="image" name="image" accept="image/png, image/jpg, image/jpeg">
                                        <small class="image-note text-muted d-block mt-2">* Ukuran gambar maksimal 1
                                            MB</small>
                                        <small class="image-error d-none text-danger d-block mt-2">* Ukuran gambar
                                            lebih dari 1 MB</small>
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center mt-5">
                                <button id="continue" type="submit" name="submit" disabled
                                    class="btn btn-primary rounded-pill px-4">Ajukan Postingan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL LIHAT POST DITEMUKAN --}}
        <div class="modal lihatPost" id="lihatPostDitemukan" tabindex="-1"
            aria-labelledby="lihatPostDitemukanLabel" aria-hidden="true">
            <div class="buat-post-modal modal-dialog modal-dialog-centered modal-dialog-scrollable position-relative">
                <div class="modal-content rounded-4 h-100">
                    <div class="modal-body p-3 h-100">
                        <form method="POST" action="{{ route('postingan.store') }}" class="h-100">
                            @csrf
                            <div class="row mb-3 h-100">
                                <div class="col-md-6 col-img">
                                    <img src="/img/mouse.jpg" alt=""
                                        class="img-fluid rounded-3 lfoto_barang">
                                </div>
                                <div class="col-md-6 d-flex flex-column">
                                    <div class="lihat-post-header pb-3 d-flex justify-content-between border-bottom">
                                        <div>
                                            <small>Pembuat Post</small>
                                            <p class="mb-0 lnama_akun">nama_akun</p>
                                        </div>
                                        <div class="text-end">
                                            <small
                                                class="d-block text-muted ltgl_ajukan_time">tgl_publikasi(jam)</small>
                                            <small
                                                class="d-block text-muted ltgl_ajukan_date">tgl_publikasi(hari)</small>
                                        </div>
                                    </div>
                                    <div class="lihat-post-content h-100 pt-3 pe-2">
                                        <div>
                                            <p class="fw-bold m-0">Nama Barang</p>
                                            <p class="ljudul_postingan">judul_postingan</p>
                                        </div>
                                        <div>
                                            <p class="fw-bold m-0">Deskripsi</p>
                                            <p class="ldeskripsi_postingan">deskripsi_postingan</p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="fw-bold m-0">Lokasi Terakhir</p>
                                                <p class="llokasi_kehilangan">lokasi_kehilangan</p>
                                            </div>
                                            <div class="col atribut_ditemukan">
                                                <p class="fw-bold m-0">Lokasi Ditemukan</p>
                                                <p class="llokasi_ditemukan">lokasi_ditemukan</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="fw-bold m-0">Tanggal Kehilangan</p>
                                                <p class="ltgl_kehilangan">tgl_kehilangan</p>
                                            </div>
                                            <div class="col atribut_ditemukan">
                                                <p class="fw-bold m-0">Tanggal Ditemukan</p>
                                                <p class="ltgl_ditemukan">tgl_ditemukan</p>
                                            </div>
                                        </div>
                                        <div class="atribut_ditemukan">
                                            <p class="fw-bold m-0">Lokasi saat ini:</p>
                                            <p class="llokasi_disimpan">lokasi_disimpan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL LIHAT POST KEHILANGAN --}}
        <div class="modal lihatPost" id="lihatPostKehilangan" tabindex="-1"
            aria-labelledby="lihatPostKehilanganLabel" aria-hidden="true">
            <div class="buat-post-modal modal-dialog modal-dialog-centered modal-dialog-scrollable position-relative">
                <div class="modal-content rounded-4 h-100">
                    <div class="modal-body p-3 h-100">
                        <form method="POST" action="{{ route('postingan.store') }}" class="h-100">
                            @csrf
                            <div class="row mb-3 h-100">
                                <div class="col-md-6 col-img">
                                    <img src="/img/mouse.jpg" alt=""
                                        class="img-fluid rounded-3 lfoto_barang">
                                </div>
                                <div class="col-md-6 d-flex flex-column">
                                    <div class="lihat-post-header pb-3 d-flex justify-content-between border-bottom">
                                        <div>
                                            <small>Pembuat Post</small>
                                            <p class="mb-0 lnama_akun">nama_akun</p>
                                        </div>
                                        <div class="text-end">
                                            <small
                                                class="d-block text-muted ltgl_ajukan_time">tgl_publikasi(jam)</small>
                                            <small
                                                class="d-block text-muted ltgl_ajukan_date">tgl_publikasi(hari)</small>
                                        </div>
                                    </div>
                                    <div class="lihat-post-content h-100 pt-3 pe-2">
                                        <div>
                                            <p class="fw-bold m-0">Nama Barang</p>
                                            <p class="ljudul_postingan">judul_postingan</p>
                                        </div>
                                        <div>
                                            <p class="fw-bold m-0">Deskripsi</p>
                                            <p class="ldeskripsi_postingan">deskripsi_postingan</p>
                                        </div>
                                        <div>
                                            <p class="fw-bold m-0">Lokasi Terakhir</p>
                                            <p class="llokasi_kehilangan">lokasi_kehilangan</p>
                                        </div>
                                        <div>
                                            <p class="fw-bold m-0">Tanggal Kehilangan</p>
                                            <p class="ltgl_kehilangan">tgl_kehilangan</p>
                                        </div>
                                        <div>
                                            <p class="fw-bold m-0">No Telepon Pemilik</p>
                                            <p class="lno_telp">no_telp</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        let imageValid = false;
        let mandatories = document.querySelectorAll('.mandatory').forEach(function(e) {
            e.addEventListener('input', function() {
                if (document.getElementById('judul_postingan').value != "" && document.getElementById(
                        'no_telp').value != "" && document.getElementById('tanggal').value != "" && document
                    .getElementById('image').value != "") {
                    // document.getElementById("continue").removeAttribute("disabled");
                } else {
                    document.getElementById("continue").setAttribute("disabled", "disabled");
                }
            })
        })

        // Memeriksa ukuran gambar <= 1MB
        var fileInput = document.getElementById("image");
        fileInput.addEventListener("change", function(event) {
            var files = event.target.files;
            if (files.length > 0) {
                var file = files[0];
                var fileSize = file.size;
                var fileSizeKB = fileSize / 1024;
                console.log(fileSizeKB.toFixed(2) < 1024);
                if (fileSizeKB.toFixed(2) < 1024) {
                    imageValid = true;
                    document.querySelector('.image-note').classList.remove('d-none');
                    document.querySelector('.image-error').classList.add('d-none');
                } else {
                    document.querySelector('.image-note').classList.add('d-none');
                    document.querySelector('.image-error').classList.remove('d-none');
                }
            }
        });
        document.getElementById('no_telp').addEventListener('input', function(event) {
            // Mendapatkan nilai input
            let inputValue = event.target.value;

            // Regular expression untuk memeriksa apakah input hanya terdiri dari angka
            let numericRegex = /^[0-9]+$/;

            // Jika input tidak berupa angka, hapus karakter terakhir dari input
            if (numericRegex.test(inputValue) || inputValue == '') {
                // event.target.value = inputValue.slice(0, -1);
                document.querySelector('.telp-error').classList.add('d-none')
            } else {
                document.querySelector('.telp-error').classList.remove('d-none')
            }
        });
        @if (Request::segment(1) == null && !isset($_GET['search']))
            window.addEventListener("scroll", function() {
                let header = document.querySelector(".navbar");
                let windowPosition = window.scrollY > 0;
                if (window.scrollY > 0) {
                    header.classList.add("scrolled", windowPosition);
                    header.classList.add("bg-white");
                    header.classList.remove("bg-transparent");
                    header.classList.remove("navbar-dark");
                    header.classList.add("shadow-sm");
                    if (header.querySelector('.login-btn')) {
                        header.querySelector('.login-btn').classList.remove("btn-outline-white")
                        header.querySelector('.login-btn').classList.add("btn-outline-primary")
                    }
                    document.querySelectorAll('.navbar-brand img').forEach(function(e) {
                        e.src = '/logo.png';
                        e.style.width = '100px';
                    })
                } else {
                    header.classList.remove("scrolled", windowPosition);
                    header.classList.remove("bg-white");
                    header.classList.add("bg-transparent");
                    header.classList.add("navbar-dark");
                    header.classList.remove("shadow-sm");
                    if (header.querySelector('.login-btn')) {
                        header.querySelector('.login-btn').classList.add("btn-outline-white")
                        header.querySelector('.login-btn').classList.remove("btn-outline-primary")
                    }
                    document.querySelectorAll('.navbar-brand img').forEach(function(e) {
                        e.src = '/logo-white.svg';
                        e.style.width = '110px';
                    })
                }
            });
        @else
            let header = document.querySelector(".navbar");
            header.classList.add('scrolled')
            header.classList.add("bg-white");
            header.classList.add("shadow-sm");
            if (header.querySelector('.login-btn')) {
                header.querySelector('.login-btn').classList.remove("btn-outline-white")
                header.querySelector('.login-btn').classList.add("btn-outline-primary")
            }
            header.classList.remove("bg-transparent");
            header.classList.remove("navbar-dark");
            document.querySelectorAll('.navbar-brand img').forEach(function(e) {
                e.src = '/logo.png';
                e.style.width = '100px';
            })
        @endif

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')

        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
        toastBootstrap.show()
    </script>
    <script src="/js/lihatPost.js"></script>
</body>

</html>
