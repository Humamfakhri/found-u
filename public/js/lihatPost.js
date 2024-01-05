// lihat post ditemukan
const cards = document.querySelectorAll('.card-img');
cards.forEach(card => {
  card.addEventListener("click", function () {
    if (card.parentElement.querySelector('.status-barang') != null) {
      if (card.parentElement.querySelector('.status-barang').innerHTML == 'Ditemukan') {
        document.querySelector('.status-ditemukan').classList.remove('d-none')
        document.querySelector('.status-kehilangan').classList.add('d-none')
        // document.querySelector('.group-llokasi-disimpan').classList.remove('d-none')
      } else {
        document.querySelector('.status-kehilangan').classList.remove('d-none')
        document.querySelector('.status-ditemukan').classList.add('d-none')
        // document.querySelector('.group-llokasi-disimpan').classList.add('d-none')
      }
    }
    document.querySelectorAll('.lnama_akun').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.nama_akun').innerHTML;
    });
    document.querySelectorAll('.ljudul_postingan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.judul_postingan').innerHTML;
    });
    document.querySelectorAll('.ldeskripsi_postingan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.deskripsi_postingan').innerHTML;
    });
    document.querySelectorAll('.llokasi_kehilangan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.lokasi_kehilangan').innerHTML;
    });
    document.querySelectorAll('.ltgl_kehilangan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.tgl_kehilangan').innerHTML;
    });
    document.querySelectorAll('.lno_telp').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.no_telp').innerHTML;
    });
    document.querySelectorAll('.ltgl_ajukan_time').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.tgl_ajukan_time').innerHTML;
    });
    document.querySelectorAll('.ltgl_ajukan_date').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.tgl_ajukan_date').innerHTML;
    });

    // Khusus Ditemukan
    // document.querySelector('.ltgl_kehilangan').innerHTML = card.parentElement.querySelector('.tgl_kehilangan').innerHTML;
    if (card.parentElement.querySelector('.lokasi_ditemukan') != null) {
      if (card.parentElement.querySelector('.lokasi_ditemukan').innerHTML != '0') {
        // document.querySelector('.group-llokasi_ditemukan').classList.remove('d-none')
        document.querySelector('.llokasi_ditemukan').innerHTML = card.parentElement.querySelector('.lokasi_ditemukan').innerHTML;
      } else {
        // document.querySelector('.group-llokasi_ditemukan').classList.add('d-none')
      }
    }
    if (card.parentElement.querySelector('.lokasi_disimpan') != null) {
      if (card.parentElement.querySelector('.lokasi_disimpan').innerHTML != '0') {
        document.querySelector('.llokasi_disimpan').innerHTML = card.parentElement.querySelector('.lokasi_disimpan').innerHTML;
      }
    }
    if (card.parentElement.querySelector('.tgl_ditemukan') != null) {
      if (card.parentElement.querySelector('.tgl_ditemukan').innerHTML != '0') {
        // document.querySelector('.group-ltgl_ditemukan').classList.remove('d-none')
        document.querySelector('.ltgl_ditemukan').innerHTML = card.parentElement.querySelector('.tgl_ditemukan').innerHTML;
      } else {
        // document.querySelector('.group-ltgl_ditemukan').classList.add('d-none')
      }
    }
  })
})

if (window.location.pathname == '/dashboard') {
  document.querySelector('.lstatus-barang').classList.add('d-none')
}

if (window.location.pathname != '/dashboard') {
  if (document.querySelector('.lihat-post-footer') != null) {
    document.querySelector('.lihat-post-footer').classList.add('d-none')
  }
}