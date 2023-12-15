<nav class="mobile-navbar w-100 bg-white justify-content-around d-md-none py-3">
    <div class="d-flex justify-content-around align-items-center">
        <a href='/dashboard' data-bs-toggle="tooltip" data-bs-title="Dashboard"
            class="{{ Route::is('dashboard') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
            <i class='fa-solid fa-house fs-5'></i>
        </a>
        <a href='/postingan' data-bs-toggle="tooltip" data-bs-title="Postingan"
            class="{{ Route::is('postingan') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
            <i class='fa-solid fa-layer-group fs-5'></i>
        </a>
        <a href='/masukan' data-bs-toggle="tooltip" data-bs-title="Masukan"
            class="{{ Route::is('masukan') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
            <i class='fa-solid fa-comment-dots fs-5'></i>
        </a>
        <a href='/faq' data-bs-toggle="tooltip" data-bs-title="FAQ"
            class="{{ Route::is('faq') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
            <i class='fa-solid fa-circle-question fs-5'></i>
        </a>
        <button class='logout rounded-pill btn p-0 text-decoration-none' data-bs-toggle="modal" data-bs-target="#logoutModal">
            <i data-bs-toggle="tooltip" data-bs-title="Logout" class='fa-solid fa-arrow-right-from-bracket fa-flip-horizontal'></i>
        </button>
    </div>
</nav>
