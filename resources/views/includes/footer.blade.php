<footer class="pb-5 {{ Route::is('tentang') ? 'footer-tentang' : 'footer-all' }}">
    <div class="footer-img"><img src="/img/footer-wave.svg" alt="" class="img-fluid"></div>
    <div class="container">
        <h2 class="mt-5 text-white fw-bold">Pertanyaan Sering Diajukan</h2>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
                    <div class="accordion-item border-0 rounded-2">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed bg-transparent text-light" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">Apa yang harus dilakukan jika pengguna ingin membuat
                                postingan baru?</button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body pt-0 text-light fw-light">Pengguna harus login terlebih dahulu
                                lalu tekan “Ajukan Postingan” dihalaman beranda.</div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mt-2 rounded-2">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed bg-transparent text-light" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">Bagaimana cara untuk mendapatkan barang yang sudah
                                ditemukan?</button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body pt-0 text-light fw-light">Pengguna harus datang ke lokasi
                                pengambilan barang sesuai dengan lokasi yang tertera pada postingan barang "Ditemukan".
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mt-2 rounded-2">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed bg-transparent text-light" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">Apa yang bisa dilakukan jika menemukan barang
                                hilang?</button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body pt-0 text-light fw-light">Pengguna dapat memberikan barang ke
                                tempat penampungan barang hilang di fakultas terdekat.</div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mt-2 rounded-2">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed bg-transparent text-light" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">Mengapa postingan saya ditolak?</button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body pt-0 text-light fw-light">Agar postingan dapat dikonfirmasi,
                                pastikan informasi yang tercantum pada postingan sudah valid.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="d-flex align-items-center">
                    <div class="px-5">
                        <img src="/img/logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="footer-sosmed d-flex flex-column gap-4">
                        <a href="#" data-bs-toggle="tooltip" data-bs-title="Facebook">
                            <i class="fs-4 fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" data-bs-toggle="tooltip" data-bs-title="Instagram">
                            <i class="fs-4 fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" data-bs-toggle="tooltip" data-bs-title="Twitter">
                            <i class="fs-4 fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" data-bs-toggle="tooltip" data-bs-title="YouTube">
                            <i class="fs-4 fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
