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
                                    <input type="text" class="form-control rounded-pill" id="judul_postingan"
                                        name="judul_postingan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="no_telp" class="form-label">No. Telepon Pemilik <span
                                            class="text-primary">*</span></label>
                                    <input type="text" class="form-control rounded-pill" id="no_telp"
                                        name="no_telp">
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
                                    <label for="lokasi_disimpan" class="form-label">Lokasi Disimpan</label>
                                    <input type="text" class="form-control rounded-pill" id="lokasi_disimpan" name="lokasi_disimpan">
                                </div>
                                <div class="mt-3">
                                    <label for="image" class="form-label">Foto Barang</label>
                                    <input type="file" class="input-file form-control rounded-pill"
                                        id="image" name="image">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center mt-5">
                            <button type="submit" name="submit" class="btn btn-primary rounded-pill px-4">Buat
                                Postingan</button>
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
                <div class="modal-body p-3 h-100">
                    <form method="POST" action="{{ route('postingan.store') }}" class="h-100">
                        @csrf
                        <div class="row mb-3 h-100">
                            <div class="col-md-6 col-img">
                                <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-3">
                            </div>
                            <div class="col-md-6 d-flex flex-column">
                                <div class="lihat-post-header pb-3 d-flex justify-content-between border-bottom">
                                    <div>
                                        <small>Pengaju</small>
                                        <p class="mb-0 lnama_akun">nama_akun</p>
                                    </div>
                                    <div class="text-end">
                                        <small class="d-block text-muted ltgl_ajukan_time">tgl_publikasi(jam)</small>
                                        <small class="d-block text-muted ltgl_ajukan_date">tgl_publikasi(hari)</small>
                                    </div>
                                </div>
                                <div class="lihat-post-content h-100 pt-3">
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
                                    <div class="group-llokasi_ditemukan">
                                        <p class="fw-bold m-0">Lokasi Ditemukan</p>
                                        <p class="llokasi_ditemukan">lokasi_ditemukan</p>
                                    </div>
                                    <div>
                                        <p class="fw-bold m-0">Tanggal Kehilangan</p>
                                        <p class="ltgl_kehilangan">tgl_kehilangan</p>
                                    </div>
                                    <div class="group-ltgl_ditemukan">
                                        <p class="fw-bold m-0">Tanggal Ditemukan</p>
                                        <p class="ltgl_ditemukan">tgl_ditemukan</p>
                                    </div>
                                    <div>
                                        <p class="fw-bold m-0">Nomor Telepon Pengaju</p>
                                        <p class="lno_telp">no_telp</p>
                                    </div>
                                    <div class="row lstatus-barang">
                                        <div class="col">
                                            <p class="fw-bold m-0">Status Barang:</p>
                                            <p
                                                class="status-ditemukan d-none mt-1 small bg-success text-white d-inline-block rounded-pill px-3 py-1">
                                                Ditemukan</p>
                                            <p
                                                class="status-kehilangan d-none mt-1 small bg-primary text-white d-inline-block rounded-pill px-3 py-1">
                                                Hilang</p>
                                        </div>
                                        <div class="col group-llokasi-disimpan">
                                            <p class="fw-bold m-0">Lokasi saat ini:</p>
                                            <p class="mt-1 llokasi-disimpan">lokasi_disimpan</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="lihat-post-footer d-flex gap-4 justify-content-center align-items-center pt-3 border-top">
                                    <button
                                        class="btn btn-sm rounded-pill btn-outline-primary d-flex align-items-center justify-content-center gap-1">Tolak
                                        <i class="fa-solid fa-xmark"></i></button>
                                    <button
                                        class="btn btn-sm rounded-pill btn-primary d-flex align-items-center justify-content-center gap-1">Publikasi
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
                icon: "error",
                title: "Postingan ditolak"
            });
        </script>
    @endif
    <script src="/js/lihatPost.js"></script>
    
    <script src="/js/editPost.js"></script>
</body>

</html>
