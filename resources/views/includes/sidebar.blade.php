<div class='sidebar d-none d-md-block'>
    <div class='sidebar-top p-4'>
        <a href='admin-index.php'><img class='nav-brand' src='../img/logo.png' alt='Logo MEIN-U'></a>
        <a href='admin-index.php'><img class='nav-brand-closed' src='../img/tel-u.png' alt='Logo MEIN-U'></a>
        <button class='toggle'>
            <i class='fa-solid fa-angle-left fs-6 m-1'></i>
        </button>
    </div>
    <div class='sidebar-menu p-4 pt-0'>
        <ul class="list-unstyled">
            <li>
                <a href='/dashboard'
                    class="{{ Illuminate\Support\Str::contains(url()->current(), ['dashboard']) ? 'active' : '' }} d-flex align-items-center rounded-pill">
                    <i class='fa-solid fa-house'></i>
                    <p class="m-0 fw-semibold">Dashboard</p>
                </a>
            </li>
            {{-- <li>
              <a href='/inbox' class="{{ Route::is('inbox') ? 'active' : '' }} d-flex align-items-center rounded-pill">
                  <i class='fa-solid fa-inbox'></i>
                  <p class="m-0 fw-semibold">Inbox</p>
              </a>
          </li> --}}
            <li>
                <a href='/postingan'
                    class="{{ Illuminate\Support\Str::contains(url()->current(), ['postingan']) ? 'active' : '' }} d-flex align-items-center rounded-pill">
                    <i class='fa-solid fa-layer-group'></i>
                    <p class="m-0 fw-semibold">Postingan</p>
                </a>
            </li>
            <li>
                <a href='/masukan'
                    class="{{ Illuminate\Support\Str::contains(url()->current(), ['masukan']) ? 'active' : '' }} d-flex align-items-center rounded-pill">
                    <i class='fa-solid fa-comment-dots'></i>
                    <p class="m-0 fw-semibold">Masukan</p>
                </a>
            </li>
            <li>
                <a href='/faq' class="{{ Illuminate\Support\Str::contains(url()->current(), ['faq']) ? 'active' : '' }} d-flex align-items-center rounded-pill">
                    <i class='fa-solid fa-circle-question'></i>
                    <p class="m-0 fw-semibold">FAQ</p>
                </a>
            </li>
        </ul>
    </div>
    <div class='sidebar-bottom'>
        <p class="m-0">Login sebagai:</p>
        <p class="admin m-0">Admin</p>
        <button class='logout rounded-pill text-decoration-none' data-bs-toggle="modal" data-bs-target="#logoutModal">
            <i class='fa-solid fa-arrow-right-from-bracket fa-flip-horizontal'></i><span>Logout</span>
        </button>
    </div>
</div>

<script>
    const body = document.querySelector("body"),
        sidebar = body.querySelector(".sidebar");
    toggle = body.querySelector(".toggle");

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
    const bars = document.querySelector(".bars");
    // const tutup = document.querySelector(".close-mobile-nav");
    // bars.addEventListener("click", function() {
    //     bars.classList.add("bars-active");
    // });
    // tutup.addEventListener("click", function() {
    //     bars.classList.remove("bars-active");
    // });
    // window.addEventListener("scroll", function() {
    //     let header = document.getElementById("search-bar");
    //     let windowPosition = window.scrollY > 0;
    //     if (window.scrollY > 0) {
    //         header.classList.add("scrolled", windowPosition);
    //     } else {
    //         header.classList.remove("scrolled", windowPosition);
    //     }
    // });
</script>
