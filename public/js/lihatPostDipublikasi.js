const cards = document.querySelectorAll('.card-img');
cards.forEach(card => {
  card.addEventListener("click", function () {
    document.querySelector('.lnama_akun').innerHTML = card.parentElement.querySelector('.nama_akun').innerHTML;
    document.querySelector('.ljudul_postingan').innerHTML = card.parentElement.querySelector('.judul_postingan').innerHTML;
    document.querySelector('.ldeskripsi_postingan').innerHTML = card.parentElement.querySelector('.deskripsi_postingan').innerHTML;
    document.querySelector('.llokasi_kehilangan').innerHTML = card.parentElement.querySelector('.lokasi_kehilangan').innerHTML;
    document.querySelector('.ltgl_kehilangan').innerHTML = card.parentElement.querySelector('.tgl_kehilangan').innerHTML;
    document.querySelector('.lno_telp').innerHTML = card.parentElement.querySelector('.no_telp').innerHTML;
    document.querySelector('.ltgl_ajukan_time').innerHTML = card.parentElement.querySelector('.tgl_ajukan_time').innerHTML;
    document.querySelector('.ltgl_ajukan_date').innerHTML = card.parentElement.querySelector('.tgl_ajukan_date').innerHTML;
  })
})

// const bebas = document.querySelector('.bebas');
// const ubah = document.querySelector('.ubah-aku');
// bebas.addEventListener("click", function () {
//   ubah.innerHTML = "asep"
// })
// cards.forEach((item, index) => {
//   console.log(index, item)
// })