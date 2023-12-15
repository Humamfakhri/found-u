@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-black">Postingan</h2>
            <p class="lead fw-normal">Total Postingan ditayangkan: 4</p>
        </div>
        <div class="filter d-flex gap-4">
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Urutkan
                    <i class="ms-2 fa-solid fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu rounded-4">
                    <li><a class="dropdown-item pe-0" href="#">Terbaru</a></li>
                    <li><a class="dropdown-item pe-0" href="#">Terlama</a></li>
                </ul>
            </div>
            {{-- <input type="date" class="rounded-pill px-4"> --}}
        </div>
    </div>
    <div class="row g-4 mt-lg-2">
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-content">
                    <div class="row align-items-center px-3 py-2 gap-1" data-bs-toggle="tooltip"
                        data-bs-title="Waktu Postingan Ditayangkan">
                        <div class="col-1 align-items-center h-100 d-flex">
                            {{-- <i class="fa-solid fa-circle-arrow-up"></i> --}}
                            {{-- <i class="fa-solid fa-upload"></i> --}}
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <div class="col">
                            <small class="m-0 small">09:01 | 18/08/2023</small>
                        </div>
                    </div>
                    <div class="card-img">
                        <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                        <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="fa-solid fa-user small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Tidak Diketahui</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Lab D2 - FIT</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-clock small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">31 Februari 1945</p>
                            </div>
                        </div>
                        <hr class="mb-0 p-0">
                    </div>
                </div>
                <div class="d-flex gap-3 p-3 pt-0">
                    <button
                        class="w-50 btn btn-outline-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                        <small>Hapus</small>
                        {{-- <i class="fa-solid fa-trash-can"></i> --}}
                        <i class="fa-regular fa-trash-can small"></i>
                    </button>
                    <button
                        class="w-50 btn btn-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                        <small>Edit</small>
                        {{-- <i class="fa-solid fa-pen"></i> --}}
                        <i class="fa-solid fa-pen-to-square small"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-content">
                    <div class="row align-items-center px-3 py-2 gap-1" data-bs-toggle="tooltip"
                        data-bs-title="Waktu Postingan Ditayangkan">
                        <div class="col-1 align-items-center h-100 d-flex">
                            {{-- <i class="fa-solid fa-circle-arrow-up"></i> --}}
                            {{-- <i class="fa-solid fa-upload"></i> --}}
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <div class="col">
                            <small class="m-0 small">09:01 | 18/08/2023</small>
                        </div>
                    </div>
                    <div class="card-img">
                        <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                        <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="fa-solid fa-user small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Tidak Diketahui</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Lab D2 - FIT</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-clock small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">31 Februari 1945</p>
                            </div>
                        </div>
                        <hr class="mb-0 p-0">
                    </div>
                </div>
                <div class="d-flex gap-3 p-3 pt-0">
                    <button
                        class="w-50 btn btn-outline-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                        <small>Hapus</small>
                        {{-- <i class="fa-solid fa-trash-can"></i> --}}
                        <i class="fa-regular fa-trash-can small"></i>
                    </button>
                    <button
                        class="w-50 btn btn-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                        <small>Edit</small>
                        {{-- <i class="fa-solid fa-pen"></i> --}}
                        <i class="fa-solid fa-pen-to-square small"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-content">
                    <div class="row align-items-center px-3 py-2 gap-1" data-bs-toggle="tooltip"
                        data-bs-title="Waktu Postingan Ditayangkan">
                        <div class="col-1 align-items-center h-100 d-flex">
                            {{-- <i class="fa-solid fa-circle-arrow-up"></i> --}}
                            {{-- <i class="fa-solid fa-upload"></i> --}}
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <div class="col">
                            <small class="m-0 small">09:01 | 18/08/2023</small>
                        </div>
                    </div>
                    <div class="card-img">
                        <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                        <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="fa-solid fa-user small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Tidak Diketahui</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Lab D2 - FIT</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-clock small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">31 Februari 1945</p>
                            </div>
                        </div>
                        <hr class="mb-0 p-0">
                    </div>
                </div>
                <div class="d-flex gap-3 p-3 pt-0">
                    <button
                        class="w-50 btn btn-outline-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                        <small>Hapus</small>
                        {{-- <i class="fa-solid fa-trash-can"></i> --}}
                        <i class="fa-regular fa-trash-can small"></i>
                    </button>
                    <button
                        class="w-50 btn btn-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                        <small>Edit</small>
                        {{-- <i class="fa-solid fa-pen"></i> --}}
                        <i class="fa-solid fa-pen-to-square small"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-content">
                    <div class="row align-items-center px-3 py-2 gap-1" data-bs-toggle="tooltip"
                        data-bs-title="Waktu Postingan Ditayangkan">
                        <div class="col-1 align-items-center h-100 d-flex">
                            {{-- <i class="fa-solid fa-circle-arrow-up"></i> --}}
                            {{-- <i class="fa-solid fa-upload"></i> --}}
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <div class="col">
                            <small class="m-0 small">09:01 | 18/08/2023</small>
                        </div>
                    </div>
                    <div class="card-img">
                        <img src="/img/mouse.jpg" alt="" class="img-fluid rounded-0">
                        <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">Mouse Logitech Merah</h5>
                        <p class="mb-2">Mouse Logitech M331 merah silent click.</p>
                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="fa-solid fa-user small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Tidak Diketahui</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">Lab D2 - FIT</p>
                            </div>
                        </div>
                        <div class="row align-items-center mt-1">
                            <div class="col-1">
                                <i class="fa-solid fa-clock small"></i>
                            </div>
                            <div class="col">
                                <p class="m-0 small">31 Februari 1945</p>
                            </div>
                        </div>
                        <hr class="mb-0 p-0">
                    </div>
                </div>
                <div class="d-flex gap-3 p-3 pt-0">
                    <button
                        class="w-50 btn btn-outline-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                        <small>Hapus</small>
                        {{-- <i class="fa-solid fa-trash-can"></i> --}}
                        <i class="fa-regular fa-trash-can small"></i>
                    </button>
                    <button
                        class="w-50 btn btn-primary py-1 rounded-pill d-flex align-items-center justify-content-center gap-2">
                        <small>Edit</small>
                        {{-- <i class="fa-solid fa-pen"></i> --}}
                        <i class="fa-solid fa-pen-to-square small"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
