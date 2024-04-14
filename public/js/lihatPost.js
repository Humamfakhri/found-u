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
        document.querySelector('.status-ditemukan').classList.add('d-none')
        document.querySelector('.status-kehilangan').classList.remove('d-none')
        // document.querySelector('.group-llokasi-disimpan').classList.add('d-none')
      }
    }
    document.querySelectorAll('.lfoto_barang').forEach(function (el) {
      el.src = card.querySelector('.foto_barang').src;
    });
    document.querySelectorAll('.lnama_akun').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.nama_akun').innerHTML;
    });
    document.querySelectorAll('.ljudul_postingan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.judul_postingan').innerHTML;
    });
    document.querySelectorAll('.ldeskripsi_postingan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.deskripsi_postingan').innerHTML;
    });
    // TANGGAL
    document.querySelectorAll('.ltgl_kehilangan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.tgl_kehilangan').innerHTML;
    });
    document.querySelectorAll('.ltgl_ditemukan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.tgl_ditemukan').innerHTML;
      if (card.parentElement.querySelector('.tgl_ditemukan').innerHTML == '') {
        document.querySelectorAll('.atribut_ditemukan').forEach(function (el) {
          el.classList.add('d-none');
        });
      } else {
        document.querySelectorAll('.atribut_ditemukan').forEach(function (el) {
          el.classList.remove('d-none');
        });
      }
    });
    // NO TELP
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
    // document.querySelectorAll('.llokasi_ditemukan').forEach(function (el) {
    //   if (card.parentElement.querySelector('.lokasi_ditemukan').innerHTML != 'Tidak diketahui') {
    //     el.value = card.parentElement.querySelector('.lokasi_ditemukan').innerHTML;
    //   }
    // });
    // document.querySelector('.ltgl_kehilangan').innerHTML = card.parentElement.querySelector('.tgl_kehilangan').innerHTML;
    // if (card.parentElement.querySelector('.lokasi_ditemukan') != null) {
    //   if (card.parentElement.querySelector('.lokasi_ditemukan').innerHTML != 'Tidak diketahui') {
    //     // document.querySelector('.group-llokasi_ditemukan').classList.remove('d-none')
    //     document.querySelector('.llokasi_ditemukan').innerHTML = card.parentElement.querySelector('.lokasi_ditemukan').innerHTML;
    //   } else {
    //     // document.querySelector('.group-llokasi_ditemukan').classList.add('d-none')
    //   }
    // }
    // if (card.parentElement.querySelector('.lokasi_disimpan') != null) {
    //   if (card.parentElement.querySelector('.lokasi_disimpan').innerHTML != 'Tidak diketahui') {
    //     document.querySelector('.llokasi_disimpan').innerHTML = card.parentElement.querySelector('.lokasi_disimpan').innerHTML;
    //   }
    // }
    // if (card.parentElement.querySelector('.tgl_ditemukan') != null) {
    //   if (card.parentElement.querySelector('.tgl_ditemukan').innerHTML != 'Tidak diketahui') {
    //     // document.querySelector('.group-ltgl_ditemukan').classList.remove('d-none')
    //     document.querySelector('.ltgl_ditemukan').innerHTML = card.parentElement.querySelector('.tgl_ditemukan').innerHTML;
    //   } else {
    //     // document.querySelector('.group-ltgl_ditemukan').classList.add('d-none')
    //   }
    // }
    // LOKASI
    // document.querySelectorAll('.llokasi_kehilangan').forEach(function (el) {
    //   el.innerHTML = card.parentElement.querySelector('.lokasi_kehilangan').innerHTML;
    //   if (el.innerHTML == '' || el.innerHTML == null || el.innerHTML == '' || el.innerHTML == '0') {
    //     console.log("masuk");
    //     document.querySelectorAll('.atribut_lokasi_kehilangan').forEach(function (el) {
    //       el.classList.add('d-none');
    //     });
    //   }
    // });
    document.querySelectorAll('.llokasi_kehilangan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.lokasi_kehilangan').innerHTML;
      if (card.parentElement.querySelector('.lokasi_kehilangan').innerHTML == '') {
        document.querySelectorAll('.atribut_lokasi_kehilangan').forEach(function (el) {
          el.classList.add('d-none');
        });
      } else {
        document.querySelectorAll('.atribut_lokasi_kehilangan').forEach(function (el) {
          el.classList.remove('d-none');
        });
      }
    });
    document.querySelectorAll('.llokasi_ditemukan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.lokasi_ditemukan').innerHTML;
      if (card.parentElement.querySelector('.lokasi_ditemukan').innerHTML == '') {
        document.querySelectorAll('.atribut_ditemukan').forEach(function (el) {
          el.classList.add('d-none');
        });
      } else {
        document.querySelectorAll('.atribut_ditemukan').forEach(function (el) {
          el.classList.remove('d-none');
        });
      }
    });
    document.querySelectorAll('.llokasi_disimpan').forEach(function (el) {
      el.innerHTML = card.parentElement.querySelector('.lokasi_disimpan').innerHTML;
      if (el.innerHTML == '0') {
        document.querySelectorAll('.atribut_ditemukan').forEach(function (el) {
          el.classList.add('d-none')
        });
      }
    });
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