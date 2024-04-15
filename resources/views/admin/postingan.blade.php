@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <div>
            <div class="d-flex align-items-center gap-2">
                <h3 class="fw-black mb-0">Postingan</h3>
                @if ($postingans_dipublikasi->count())
                    <small
                        class="counter-postingan bg-primary rounded-pill text-white">{{ $postingans_dipublikasi->count() }}</small>
                @endif
            </div>
            <p class="fs-18">Postingan yang ditayangkan dan dilihat pengguna.</p>
        </div>
        @if ($postingans_dipublikasi->count())
            <div class="filter d-flex gap-4">
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $filter }}
                        <i class="ms-2 fa-solid fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu rounded-4 py-0 rounded-pill">
                        <li class="rounded-pill">
                            <a class="rounded-pill dropdown-item small"
                                href="{{ $filter == 'Terbaru' ? 'postingan?filter=terlama' : 'postingan' }}">{{ $filter_list }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </div>
    <div class="row g-4">
        @if (!$postingans_dipublikasi->count())
            <div class="text-center mt-5 pt-4">
                <i class="text-muted fa-solid fa-box-open fs-1"></i>
                <p class="text-muted mt-3">Tidak ada postingan ditayangkan</p>
            </div>
        @endif
        @foreach ($postingans_dipublikasi as $postingan_dipublikasi)
            <div class="col-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-content">
                        <p hidden class="idSource">{{ $postingan_dipublikasi->id_postingan }}</p>
                        <p hidden class="jamPublikasiSource">
                            {{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->format('H:i') }}</p>
                        <p hidden class="hariPublikasiSource">
                            {{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->translatedFormat('d F Y') }}</p>
                        <p hidden class="lokasiKehilanganSource">
                            {{ $postingan_dipublikasi->lokasi_kehilangan ? $postingan_dipublikasi->lokasi_kehilangan : '-' }}
                        </p>
                        <p hidden class="lokasiDitemukanSource">
                            {{ $postingan_dipublikasi->lokasi_ditemukan ? $postingan_dipublikasi->lokasi_ditemukan : '-' }}
                        </p>
                        <p hidden class="lokasiDisimpanSource">
                            {{ $postingan_dipublikasi->lokasi_disimpan ? $postingan_dipublikasi->lokasi_disimpan : '-' }}
                        </p>
                        <p hidden class="tanggalKehilanganSource">
                            {{ $postingan_dipublikasi->tgl_kehilangan ? Carbon\Carbon::parse($postingan_dipublikasi->tgl_kehilangan)->translatedFormat('d F Y') : '-' }}
                        </p>
                        <p hidden class="tanggalDitemukanSource">
                            {{ $postingan_dipublikasi->tgl_ditemukan ? Carbon\Carbon::parse($postingan_dipublikasi->tgl_ditemukan)->translatedFormat('d F Y') : '-' }}
                        </p>
                        <p hidden class="etgl_kehilangan">
                            {{ $postingan_dipublikasi->tgl_kehilangan ? Carbon\Carbon::parse($postingan_dipublikasi->tgl_kehilangan)->translatedFormat('Y-m-d') : '' }}
                        </p>
                        <p hidden class="etgl_ditemukan">
                            {{ $postingan_dipublikasi->tgl_ditemukan ? Carbon\Carbon::parse($postingan_dipublikasi->tgl_ditemukan)->translatedFormat('Y-m-d') : '' }}
                        </p>
                        <p hidden class="noTelpPengajuSource">{{ $postingan_dipublikasi->no_telp }}</p>
                        <div class="card-top d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ $postingan_dipublikasi->akun->getImageURL() }}" alt=""
                                    class="img-fluid rounded-circle" width="35">
                                <div class="d-flex flex-column gap-0 g-0">
                                    <p class="mb-0 p-0 fw-semibold small pengajuSource">
                                        {{ $postingan_dipublikasi->akun->nama_akun }}</p>
                                    <div class="d-flex gap-1">
                                        <small class="m-0 p-0 fs-12">Diposting:</small>
                                        <small
                                            class="m-0 p-0 fs-12">{{ Carbon\Carbon::parse($postingan_dipublikasi->tgl_publikasi)->diffForHumans(null, true) . ' lalu' }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm p-0 dropdown-toggle border-0 rounded-pill pt-1 px-1"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical fs-18"></i>
                                </button>
                                <ul class="dropdown-menu rounded-3 py-0 ">
                                    <li>
                                        <a href="#" class="btnEditPost rounded-top dropdown-item small py-2"
                                            data-bs-toggle="modal" data-bs-target="#editPost"><i
                                                class="fa-regular fa-pen-to-square"></i> Edit</a>
                                    </li>
                                    <li>
                                        <form
                                            action="{{ route('postingan.delete', $postingan_dipublikasi->id_postingan) }}"
                                            method="POST" class="dropdown-item rounded-bottom">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="hapus" value=1>
                                            <button type="submit"
                                                class="rounded-bottom btn small px-0 py-1 d-flex align-items-center gap-1">
                                                <i class="fa-regular fa-trash-can"></i>
                                                <small>Hapus</small>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-img" data-bs-toggle="modal" data-bs-target="#lihatPost">
                            <img src="{{ $postingan_dipublikasi->getImageURL() }}" alt=""
                                class="img-fluid rounded-0 imageSource">
                            <div class="card-img-floating"><button class="btn btn-outline-light">Lihat</button>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (is_null($postingan_dipublikasi->tgl_ditemukan) and is_null($postingan_dipublikasi->lokasi_ditemukan))
                                <small
                                    class="small mb-0 bg-primary rounded-pill px-3 py-1 d-inline-block text-white statusBarangSource">Kehilangan</small>
                            @else
                                <small
                                    class="small mb-0 bg-success rounded-pill px-3 py-1 d-inline-block text-white statusBarangSource">Ditemukan</small>
                            @endif
                            <p class="namaBarangSource fs-18 fw-bold mb-0">{{ $postingan_dipublikasi->judul_postingan }}
                            </p>
                            <p class="mb-2 deskripsiSource">{{ $postingan_dipublikasi->deskripsi_postingan }}</p>
                            @if ($postingan_dipublikasi->lokasi_disimpan != null)
                                <div class="row align-items-center mt-1">
                                    <div class="col-1">
                                        <i class="fa-solid fa-location-dot small"></i>
                                    </div>
                                    <div class="col">
                                        @if (!is_null($postingan_dipublikasi->lokasi_ditemukan) or !is_null($postingan_dipublikasi->tgl_ditemukan))
                                            <p class="m-0 small">{{ $postingan_dipublikasi->lokasi_disimpan }}</p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- MODAL EDIT POST -->
    @if ($postingans_dipublikasi->count())
        <div class="modal lihatPost" id="editPost" tabindex="-1" aria-labelledby="editPostLabel" aria-hidden="true">
            <div class="buat-post-modal modal-dialog modal-dialog-centered modal-dialog-scrollable position-relative">
                <div class="modal-content rounded-4 h-100">
                    <div class="modal-body p-0 w-100 h-100">
                        <form id="formEdit" method="POST"
                            action="{{ route('postingan.update', $postingan_dipublikasi->id_postingan) }}" class="h-100">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="edit">
                            <small></small>
                            <div class="row mb-3 w-100 h-100">
                                <div class="col-md-6 col-img">
                                    <img src="{{ $postingan_dipublikasi->getImageURL() }}" alt=""
                                        class="img-fluid eimage">
                                </div>
                                <div class="col-md-6 d-flex flex-column p-3">
                                    <div class="lihat-post-header py-3 d-flex justify-content-between border-bottom">
                                        <div>
                                            <small>Pengaju</small>
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
    @endif
@endsection
@section('script')
    <script>
        document.getElementById('edeskripsi_postingan').addEventListener('keyup', function() {
            this.style.overflow = 'hidden';
            this.style.height = 0;
            this.style.height = this.scrollHeight + 'px';
        }, false);

        const inputJawaban = document.getElementById('edeskripsi_postingan');
        inputJawaban.style.overflow = 'hidden';
        inputJawaban.style.height = 0;
        inputJawaban.style.height = inputJawaban.scrollHeight + 'px';
    </script>
    <script src="/js/editPost.js"></script>
@endsection
