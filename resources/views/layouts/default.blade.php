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
    <div class="floating-icon">
        <button type="button" class="btn border-0" data-bs-toggle="modal" data-bs-target="#buatPost">
            <i class="fs-1 text-primary fa-solid fa-circle-plus"></i>
        </button>
    </div>
    <header>
        @include('includes.header')
    </header>
    <main>
        @yield('content')
        {{-- TOAST --}}
        {{-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> --}}
        @if (session()->has('success'))
            <div class="toast-container position-fixed bottom-0 start-0 m-4">
                <div id="liveToast" class="toast rounded-pill border-primary px-3 shadow" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body text-primary fw-bold">
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

        <!-- Modal -->
        <div class="modal fade-scale" id="buatPost" tabindex="-1" aria-labelledby="buatPostLabel" aria-hidden="true">
            <div class="buat-post-modal modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content rounded-4">
                    <div class="modal-header justify-content-center position-relative">
                        <h1 class="modal-title fs-4 text-center fw-bold" id="buatPostLabel">Buat Postingan Baru</h1>
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4 pb-0">
                        <form method="POST" action="{{ route('postingan.store') }}">
                            @csrf
                            <input type="hidden" name="status" value=1>
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
                                        <label for="tanggal" class="form-label">Tanggal Kehilangan <span
                                                class="text-primary">*</span></label>
                                        <input type="date" class="form-control rounded-pill" id="tanggal"
                                            name="tanggal">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div>
                                        <label for="deskripsi_postingan" class="form-label">Deskripsi Barang</label>
                                        <textarea class="form-control rounded-4" id="deskripsi_postingan" name="deskripsi_postingan"
                                            style="height: 100px; resize: none"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="foto_barang" class="form-label">Foto Barang</label>
                                        <input type="file" class="input-file form-control rounded-pill"
                                            id="foto_barang" name="foto_barang">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center mt-5">
                                <button type="submit" name="submit" class="btn btn-primary rounded-pill px-4">Ajukan
                                    Postingan</button>
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
</body>

</html>
