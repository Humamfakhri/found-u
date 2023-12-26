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
            <form class="px-3 px-md-5 rounded-0">
                <div class="position-relative">
                    <small class="position-absolute ms-4 d-flex align-items-center h-100"><i
                            class="fa-solid fa-magnifying-glass"></i></small>
                    <input type="text" class=" ps-5 form-control rounded-pill border-0" id="searchBar"
                        placeholder="Cari Barang / Pemilik Barang">
                </div>
                <button type="submit" class="btn btn-primary" hidden>Submit</button>
            </form>
            <div class="content px-4 pt-4">
                @yield('content')
            </div>
            @include('includes.footer-admin')
        </main>
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
                    <button type="button" class="btn btn-primary rounded-pill py-1"><a href="{{ route('logout') }}">Logout</a></button>
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
    </script>
</body>

</html>
