const btnEditPost = document.querySelectorAll('.btnEditPost');
btnEditPost.forEach(card => {
  card.addEventListener("click", function () {
    const card_content = card.parentElement.parentElement.parentElement.parentElement.parentElement;
    if (card_content.querySelector('.status-barang') != null) {
      if (card_content.querySelector('.status-barang').innerHTML == 'Ditemukan') {
        document.querySelector('.status-ditemukan').classList.remove('d-none')
        document.querySelector('.status-kehilangan').classList.add('d-none')
      } else {
        document.querySelector('.status-kehilangan').classList.remove('d-none')
        document.querySelector('.status-ditemukan').classList.add('d-none')
      }
    }
    const form = document.getElementById('formEdit') || null;
    const id = card_content.querySelector('.id_postingan').innerHTML;
    if (form) {
      form.action = "postingan/"+id;
    }
    console.log(document.querySelector('.etgl_ajukan_time').innerHTML);
    document.querySelector('.etgl_ajukan_time').innerHTML = card_content.querySelector('.tgl_ajukan_time').innerHTML;
    document.querySelector('.etgl_ajukan_date').innerHTML = card_content.querySelector('.tgl_ajukan_date').innerHTML;
    document.querySelectorAll('.enama_akun').forEach(function (el) {
      el.innerHTML = card_content.querySelector('.nama_akun').innerHTML;
    }); 
    document.querySelectorAll('[name="ejudul_postingan"]').forEach(function (el) {
      el.value = card_content.querySelector('.judul_postingan').innerHTML;
    });
    document.querySelectorAll('[name="edeskripsi_postingan"]').forEach(function (el) {
      el.value = card_content.querySelector('.deskripsi_postingan').innerHTML;
    });
    document.querySelectorAll('[name="elokasi_kehilangan"]').forEach(function (el) {
      el.value = card_content.querySelector('.lokasi_kehilangan').innerHTML;
      if (card_content.querySelector('.lokasi_kehilangan').innerHTML == '') {
        el.value = 'Tidak diketahui';
      }
    });
    document.querySelectorAll('[name="etgl_kehilangan"]').forEach(function (el) {
      if (card_content.querySelector('.etgl_kehilangan').innerHTML != 'Tidak diketahui') {
        el.value = card_content.querySelector('.etgl_kehilangan').innerHTML;
      }
    });
    document.querySelectorAll('[name="eno_telp"]').forEach(function (el) {
      el.value = card_content.querySelector('.no_telp').innerHTML;
    });

    // KHUSUS DITEMUKAN
    document.querySelectorAll('[name="elokasi_ditemukan"]').forEach(function (el) {
      if (card_content.querySelector('.lokasi_ditemukan').innerHTML != 'Tidak diketahui') {
        el.value = card_content.querySelector('.lokasi_ditemukan').innerHTML;
      }
    });
    document.querySelectorAll('[name="elokasi_disimpan"]').forEach(function (el) {
      if (card_content.querySelector('.lokasi_disimpan').innerHTML != 'Tidak diketahui') {
        el.value = card_content.querySelector('.lokasi_disimpan').innerHTML;
      }
    });
    document.querySelectorAll('[name="etgl_ditemukan"]').forEach(function (el) {
      if (card_content.querySelector('.etgl_ditemukan').innerHTML != 'Tidak diketahui') {
        el.value = card_content.querySelector('.etgl_ditemukan').innerHTML;
      }
    });
  })
})

if (window.location.pathname == '/dashboard') {
  if (document.querySelector('.estatus-barang') != null) {
    document.querySelector('.estatus-barang').classList.add('d-none')
  }
}

if (window.location.pathname != '/dashboard') {
  document.querySelector('.lihat-post-footer').classList.add('d-none')
}