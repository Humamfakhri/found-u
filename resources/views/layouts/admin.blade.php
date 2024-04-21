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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main-admin.css">
    @yield('head')
</head>

<body>
    @include('includes.mobile-navbar')
    <div class="d-flex">
        @include('includes.sidebar')
        <main class="w-100 min-vh-100 position-relative">
            <form class="px-3 px-md-5 rounded-0 search-bar" method="GET"
                action="{{ route('admin_pages', 'postingan') }}">
                <div class="position-relative">
                    <small class="position-absolute ms-4 d-flex align-items-center h-100"><i
                            class="fa-solid fa-magnifying-glass"></i></small>
                    <input type="text" class="py-2 ps-5 form-control rounded-pill border-0" id="searchBar"
                        name="search" placeholder="Cari Barang / Pemilik Barang">
                </div>
                <button type="submit" class="btn btn-primary" hidden>Submit</button>
            </form>
            <div class="content px-4 pt-4">
                @yield('content')
            </div>
            @include('includes.footer-admin')
        </main>
    </div>

    {{-- BUAT POST --}}
    <div class="floating-icon">
        <button type="button" class="btn border-0" data-bs-toggle="modal" data-bs-target="#buatPost">
            <i class="fs-1 text-primary fa-solid fa-circle-plus"></i>
        </button>
    </div>
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
                        <input type="hidden" name="status" value=2>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div>
                                    <label for="judul_postingan" class="form-label">Nama Barang <span
                                            class="text-primary">*</span></label>
                                    <input type="text" class="mandatory form-control rounded-pill"
                                        id="judul_postingan" name="judul_postingan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="no_telp" class="form-label">No. Telepon Pemilik</label>
                                    <input type="text" class="mandatory form-control rounded-pill" id="no_telp"
                                        name="no_telp">
                                    <small class="telp-error d-none text-danger d-block mt-2">* Hanya masukkan
                                        angka</small>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div>
                                    <label for="lokasi_kehilangan" class="form-label">Lokasi Terakhir</label>
                                    <input type="text" class="form-control rounded-pill" id="lokasi_kehilangan"
                                        name="lokasi_kehilangan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="lokasi_ditemukan" class="form-label">Lokasi Ditemukan</label>
                                    <input type="text" class="form-control rounded-pill" id="lokasi_ditemukan"
                                        name="lokasi_ditemukan">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div>
                                    <label for="tgl_kehilangan" class="form-label">Tanggal Kehilangan</label>
                                    <input type="date" class="form-control rounded-pill" id="tgl_kehilangan"
                                        name="tgl_kehilangan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="tgl_ditemukan" class="form-label">Tanggal Ditemukan</label>
                                    <input type="date" class="form-control rounded-pill" id="tgl_ditemukan"
                                        name="tgl_ditemukan">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div>
                                    <label for="deskripsi_postingan" class="form-label">Deskripsi Barang</label>
                                    <textarea class="form-control rounded-4" id="deskripsi_postingan" name="deskripsi_postingan"
                                        style="height: 125px; resize: none"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="lokasi_disimpan" class="form-label">Lokasi Disimpan <small
                                            class="text-muted">(jika ditemukan)</small></label>
                                    <select name="lokasi_disimpan" class="form-select rounded-pill"
                                        aria-label="Default select example">
                                        <option selected>-- Lokasi barang disimpan --</option>
                                        <option value="FEB (Fakultas Ekonomi dan Bisnis)">FEB (Fakultas Ekonomi dan
                                            Bisnis)</option>
                                        <option value="FIF (Fakultas Informatika)">FIF (Fakultas Informatika)</option>
                                        <option value="FIK (Fakultas Industri Kreatif)">FIK (Fakultas Industri Kreatif)
                                        </option>
                                        <option value="FIT (Fakultas Ilmu Terapan)">FIT (Fakultas Ilmu Terapan)
                                        </option>
                                        <option value="FKB (Fakultas Komunikasi dan Bisnis)">FKB (Fakultas Komunikasi
                                            dan Bisnis)</option>
                                        <option value="FRI (Fakultas Rekayasa Industri)">FRI (Fakultas Rekayasa
                                            Industri)</option>
                                        <option value="FTE (Fakultas Teknik Elektro)">FTE (Fakultas Teknik Elektro)
                                        </option>
                                        <option value="GKU (Gedung Kuliah Umum)">GKU (Gedung Kuliah Umum)</option>
                                    </select>
                                    {{-- <div class="dropdown">
                                        <button
                                            class="btn btn-outline-secondary rounded-pill px-3 dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ $filter }}
                                            <i class="ms-2 fa-solid fa-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu py-0 rounded">
                                            <li class="rounded-top dropdown-item ">FIT (Fakultas Ilmu Terapan)</li>
                                            <li class="dropdown-item ">FIT (Fakultas Ilmu Terapan)</li>
                                            <li class="dropdown-item ">FIT (Fakultas Ilmu Terapan)</li>
                                            <li class="dropdown-item ">FIT (Fakultas Ilmu Terapan)</li>
                                            <li class="rounded-bottom dropdown-item ">FIT (Fakultas Ilmu Terapan)</li>
                                        </ul>
                                    </div> --}}
                                    {{-- <input type="text" class="form-control rounded-pill" id="lokasi_disimpan"
                                        name="lokasi_disimpan"> --}}
                                </div>
                                <div class="mt-3">
                                    <label for="image" class="form-label">Foto Barang <span
                                            class="text-primary">*</span></label>
                                    <input type="file" value="{{ old('image') }}"
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
                            <button id="continue" disabled type="submit" name="submit"
                                class="btn btn-primary rounded-pill px-4">Buat Postingan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- TOAST --}}
    {{-- @if (session()->has('success'))
        <div class="toast-container position-fixed bottom-0 end-0 m-4">
            <div id="liveToast" class="toast rounded-pill border-primary px-3 shadow" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-body text-primary fw-bold">
                    {{ session()->get('success') }}
                </div>
            </div>
        </div>
    @endif --}}

    <!-- MODAL LIHAT POST -->
    <div class="modal lihatPost" id="lihatPost" tabindex="-1" aria-labelledby="lihatPostLabel" aria-hidden="true">
        <div class="buat-post-modal modal-dialog modal-dialog-centered modal-dialog-scrollable position-relative">
            <div class="modal-content rounded-4 h-100">
                <div class="modal-body p-0 w-100 h-100">
                    <form method="POST" action="{{ route('postingan.store') }}" class="h-100">
                        @csrf
                        <div class="row mb-3 w-100 h-100">
                            <div class="col-md-6 col-img">
                                <img src="/img/mouse.jpg" alt="" class="img-fluid image">
                            </div>
                            <div class="col-md-6 d-flex flex-column p-3">
                                <div class="lihat-post-header py-3 d-flex justify-content-between border-bottom">
                                    <div>
                                        <small>{{ request()->path() == 'dashboard' ? 'Pengaju' : 'Pembuat Post' }}</small>
                                        <p class="mb-0 pengaju">nama_akun</p>
                                    </div>
                                    <div class="text-end">
                                        <small class="d-block text-muted jamPublikasi">tgl_publikasi(jam)</small>
                                        <small class="d-block text-muted hariPublikasi">tgl_publikasi(hari)</small>
                                    </div>
                                </div>
                                <div class="lihat-post-content h-100 pt-3">
                                    <div>
                                        <p class="fw-bold m-0">Nama Barang</p>
                                        <p class="namaBarang">judul_postingan</p>
                                    </div>
                                    <div>
                                        <p class="fw-bold m-0">Deskripsi</p>
                                        <p class="deskripsi">deskripsi_postingan</p>
                                    </div>
                                    <div class="lokasi_terakhir atribut_lokasi_kehilangan">
                                        <p class="fw-bold m-0">Lokasi Terakhir</p>
                                        <p class="lokasiKehilangan">lokasi_kehilangan</p>
                                    </div>
                                    <div class="atribut_ditemukan">
                                        <p class="fw-bold m-0">Lokasi Ditemukan</p>
                                        <p class="lokasiDitemukan">lokasi_ditemukan</p>
                                    </div>
                                    <div>
                                        <p class="fw-bold m-0">Tanggal Kehilangan</p>
                                        <p class="tanggalKehilangan">tgl_kehilangan</p>
                                    </div>
                                    <div class="atribut_ditemukan">
                                        <p class="fw-bold m-0">Tanggal Ditemukan</p>
                                        <p class="tanggalDitemukan">tgl_ditemukan</p>
                                    </div>
                                    <div>
                                        <p class="fw-bold m-0">Nomor Telepon</p>
                                        <p class="noTelpPengaju">no_telp</p>
                                    </div>
                                    <div class="row statusBarang">
                                        <div class="col">
                                            <p class="fw-bold m-0">Status Barang:</p>
                                            <p
                                                class="statusBarangKehilangan d-none mt-1 small bg-primary text-white d-inline-block rounded-pill px-3 py-1">
                                                Hilang</p>
                                            <p
                                                class="statusBarangDitemukan d-none mt-1 small bg-success text-white d-inline-block rounded-pill px-3 py-1">
                                                Ditemukan</p>
                                        </div>
                                        <div class="col atribut_ditemukan">
                                            <p class="fw-bold m-0">Lokasi saat ini:</p>
                                            <p class="mt-1 lokasiDisimpan">lokasi_disimpan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT POST -->
    <div class="modal lihatPost" id="editPost" tabindex="-1" aria-labelledby="editPostLabel" aria-hidden="true">
        <div class="buat-post-modal modal-dialog modal-dialog-centered modal-dialog-scrollable position-relative">
            <div class="modal-content rounded-4 h-100">
                <div class="modal-body p-0 w-100 h-100">
                    <form id="formEdit" method="POST"
                        action="{{ route('postingan.update', 1) }}" class="h-100">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="edit">
                        <small></small>
                        <div class="row mb-3 w-100 h-100">
                            <div class="col-md-6 col-img">
                                <img src="{{ url('storage/foto-barang/no-image.jpg') }}" alt=""
                                    class="img-fluid eimage">
                            </div>
                            <div class="col-md-6 d-flex flex-column p-3">
                                <div class="lihat-post-header py-3 d-flex justify-content-between border-bottom">
                                    <div>
                                        <small>Pengaju</small>
                                        <input type="hidden" name="eid_akun" value="1">
                                        <p class="mb-0 enama_akun">nama_akun</p>
                                    </div>
                                    <div class="text-end">
                                        <small class="d-block text-muted etgl_ajukan_time">tgl_publikasi(jam)</small>
                                        <small class="d-block text-muted etgl_ajukan_date">tgl_publikasi(hari)</small>
                                    </div>
                                </div>
                                <div class="lihat-post-content h-100 pt-3 ps-1 pe-2">
                                    <div>
                                        <p class="fw-bold m-0">Nama Barang</p>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="ejudul_postingan">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <p class="fw-bold m-0">Deskripsi</p>
                                        <div class="form-floating border-0 p-0">
                                            <textarea class="form-control py-2 bg-white" spellcheck="false" id="edeskripsi_postingan"
                                                name="edeskripsi_postingan"
                                                style="
                                                resize: none;
                                                overflow: hidden;
                                                min-height: 50px;
                                                padding: 10px;
                                                font-size: 16px;"></textarea>
                                            {{-- <label for="floatingTextarea">Comments</label> --}}
                                        </div>
                                        {{-- <div class="mb-3">
                                        <input type="text" class="form-control" name="edeskripsi_postingan" id="edeskripsi_postingan">
                                    </div> --}}
                                    </div>
                                    <div class="atribut_lokasi_kehilangan">
                                        <p class="fw-bold m-0">Lokasi Terakhir</p>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="elokasi_kehilangan">
                                        </div>
                                    </div>
                                    <div class="group-llokasi_ditemukan">
                                        <p class="fw-bold m-0">Lokasi Ditemukan</p>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="elokasi_ditemukan">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bold m-0">Tanggal Kehilangan</p>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" name="etgl_kehilangan">
                                        </div>
                                    </div>
                                    <div class="group-ltgl_ditemukan">
                                        <p class="fw-bold m-0">Tanggal Ditemukan</p>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" name="etgl_ditemukan">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bold m-0">Nomor Telepon</p>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="eno_telp">
                                        </div>
                                    </div>
                                    <div class="row estatus-barang">
                                        <div class="col group-llokasi-disimpan">
                                            <p class="fw-bold m-0">Lokasi saat ini:</p>
                                            <div class="mb-3">
                                                <select name="elokasi_disimpan" class="form-select rounded-pill"
                                                    aria-label="Default select example">
                                                    <option>-- Lokasi barang disimpan --</option>
                                                    <option value="FEB (Fakultas Ekonomi dan Bisnis)">FEB (Fakultas Ekonomi dan Bisnis)</option>
                                                    <option value="FIF (Fakultas Informatika)">FIF (Fakultas Informatika)</option>
                                                    <option value="FIK (Fakultas Industri Kreatif)">FIK (Fakultas Industri Kreatif)</option>
                                                    <option value="FIT (Fakultas Ilmu Terapan)">FIT (Fakultas Ilmu Terapan)</option>
                                                    <option value="FKB (Fakultas Komunikasi dan Bisnis)">FKB (Fakultas Komunikasi dan Bisnis)</option>
                                                    <option value="FRI (Fakultas Rekayasa Industri)">FRI (Fakultas Rekayasa Industri)</option>
                                                    <option value="FTE (Fakultas Teknik Elektro)">FTE (Fakultas Teknik Elektro)</option>
                                                    <option value="GKU (Gedung Kuliah Umum)">GKU (Gedung Kuliah Umum)</option>
                                                </select>
                                                {{-- <input type="text" class="form-control" name="elokasi_disimpan"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="edit-post-footer d-flex gap-4 justify-content-center align-items-center pt-3 border-top">
                                    <button type="button" data-bs-dismiss="modal"
                                        class="btn btn-sm rounded-pill btn-outline-primary d-flex align-items-center justify-content-center gap-1">Batal
                                        <i class="fa-solid fa-xmark"></i></button>
                                    <button type="submit"
                                        class="btn btn-sm rounded-pill btn-primary d-flex align-items-center justify-content-center gap-1">Simpan
                                        <i class="fa-solid fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="logout-modal modal-dialog modal-dialog-centered justify-content-center mx-auto">
            <div class="modal-content rounded-4">
                <div class="modal-header justify-content-center">
                    <h1 class="modal-title fs-5 fw-bold" id="logoutModalLabel">Logout</h1>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body text-center fs-18 fw-normal pb-4">
                    Anda yakin?
                </div>
                <div class="modal-footer border-0 justify-content-center gap-2">
                    <button type="button" class="btn btn-outline-primary rounded-pill py-1"
                        data-bs-dismiss="modal">Batal</button>
                    <form action="{{ route('logout') }}" method="GET" class="bg-white">
                        <button type="submit" class="btn btn-primary rounded-pill py-1">Ya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        let imageValid = false;
        let mandatories = document.querySelectorAll('.mandatory').forEach(function(e) {
            e.addEventListener('input', function() {
                if (document.getElementById('judul_postingan').value != "" && imageValid) {
                    document.getElementById("continue").removeAttribute("disabled");
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
                    if (document.getElementById('judul_postingan').value != "" && imageValid) {
                        document.getElementById("continue").removeAttribute("disabled");
                    } else {
                        document.getElementById("continue").setAttribute("disabled", "disabled");
                    }
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
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')

        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
        toastBootstrap.show()
        // if (toastTrigger) {
        //     toastTrigger.addEventListener('click', () => {
        //     })
        // }
    </script>

    {{-- Alert Postingan Dipublikasi/Ditolak --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (Session::get('dipublikasi'))
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
                title: "Postingan dipublikasi"
            });
        </script>
    @elseif (Session::get('dihapus'))
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
                title: "Postingan telah dihapus"
            });
        </script>
    @elseif (Session::get('editPostingan'))
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
                title: "Berhasil mengedit postingan"
            });
        </script>
    @elseif (Session::get('gagalEditPostingan'))
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
                icon: "error",
                title: "Gagal mengedit postingan"
            });
        </script>
    @elseif (Session::get('ditolak'))
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
                title: "Postingan ditolak"
            });
        </script>
    @endif
    <script src="/js/lihatPostAdmin.js"></script>
    @yield('script')
</body>

</html>
