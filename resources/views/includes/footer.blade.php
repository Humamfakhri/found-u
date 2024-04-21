<footer class="pb-4 {{ Route::is('tentang') ? 'footer-tentang' : 'footer-all' }}">
    <div class="footer-img"><img src="/img/footer-wave2.svg" alt="" class="img-fluid" style="transform: translateY(5px)"></div>
    <div class="container">
        <h3 class="mt-3 mb-3 text-white fw-bold {{ $faqs->count() ? '' : 'd-none' }}">Pertanyaan Sering Diajukan</h3>
        <div class="row align-items-center {{ $faqs->count() ? '' : 'justify-content-center' }}">
            @if ($faqs->count())
            <div class="col-lg-7">
                <div class="accordion accordion-flush mt-1" id="accordionFlushExample">
                    @foreach ($faqs as $faq)
                    <div class="accordion-item border-0 rounded-3 mb-3">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed bg-transparent text-light" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-{{ $faq->id_masukan }}" aria-expanded="false"
                                aria-controls="flush-{{ $faq->id_masukan }}">{{$faq->pesan}}</button>
                        </h2>
                        <div id="flush-{{ $faq->id_masukan }}" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body pt-0 text-light fw-light">{{ $faq->jawaban }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="col-5 d-flex flex-column mt-4 mt-md-0">
                <div class="px-lg-5 order-2 order-md-1 mx-auto mt-lg-4 mt-md-0">
                    <img src="/img/logo.png" alt="" class="img-fluid">
                </div>
                <div class="footer-sosmed d-flex justify-content-center gap-5 order-1 order-md-2">

                    {{-- <a href="#" data-bs-toggle="tooltip" data-bs-title="Facebook">
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
                    </a> --}}
                </div>
                <small class="text-center text-white-50 fw-bold order-3">&copy; FOUND-U 2023</small>
            </div>
        </div>
    </div>
</footer>
