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
    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div class="content">
        <div class="row m-0 p-0 h-100">
            <div class="col-lg-7 col-md-6 d-none d-md-flex position-relative h-100 align-items-center">
                <div class="container image-container ps-5">
                    {{-- <i class="fs-5 fa-solid fa-house"></i> --}}
                    <a href="/" data-bs-toggle="tooltip" data-bs-title="Kembali"><i
                            class="fs-5 text-light fa-solid fa-arrow-left-long"></i></a>
                    <div class="mt-5">
                        <img src="/img/logo-white.svg" alt="" class="img-fluid">
                        <p class="text-light lead">Selamat Datang di FOUND-U</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 bg-white rounded-4 px-4">
                <div class="container login-container d-flex flex-column h-100 justify-content-center">
                    <div class="text-center d-block d-md-none mb-3">
                        <img src="/img/logo.png" alt="" class="img-fluid">
                        <p class="lead">Selamat Datang di FOUND-U</p>
                    </div>
                    <h4>Login</h4>
                    <form method="POST" class="mt-4" action="{{ route('login') }}">
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        @csrf
                        <div class="mb-3 position-relative">
                            <input type="text" class="form-control pe-4 py-2 ps-5 rounded-pill" id="username"
                                name="username" placeholder="Username">
                            <i class="fa-solid fa-user position-absolute icon-left"></i>
                        </div>
                        <div class="mb-5 position-relative">
                            <input type="password" class="form-control px-5 py-2 rounded-pill" id="password"
                                name="password" aria-describedby="passwordHelp" placeholder="Kata Sandi">
                            <i class="fa-solid fa-lock position-absolute icon-left"></i>
                            <i class="fa-regular fa-eye position-absolute icon-right" id="passwordToggle"
                                onclick="togglePasswordVisibility()"></i>
                        </div>
                        <button type="submit" class="btn btn-primary d-block rounded-pill w-100 fw-bold">Login</button>
                    </form>
                    <small class="text-muted d-block text-center mt-3">*Gunakan akun SSO (Single Sign-On) untuk login.
                    </small>
                </div>
            </div>
        </div>
    </div>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("passwordInput");
            const passwordToggle = document.getElementById("passwordToggle");
            if (passwordInput.type === "password") {
                passwordToggle.classList.toggle('fa-eye')
                passwordToggle.classList.toggle('fa-eye-slash')
                passwordInput.type = "text";
            } else {
                passwordToggle.classList.toggle('fa-eye')
                passwordToggle.classList.toggle('fa-eye-slash')
                passwordInput.type = "password";
            }
        }
    </script>
    {{-- Alert --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    {{-- @if (Session::get('error'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Login Gagal",
                text: "Username / Password Salah!",
                footer: false
            });
        </script>
    @endif --}}
</body>

</html>
