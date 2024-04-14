const textarea = document.getElementById('edeskripsi_postingan');
function setHeight() {
  textarea.style.height = 'auto'; // Set tinggi ke 'auto' untuk mengukur tinggi konten
  textarea.style.height = textarea.scrollHeight + 'px'; // Set tinggi ke tinggi konten yang sebenarnya
}
textarea.addEventListener('input', setHeight);
window.onload = setHeight;

// MENGUBAH NILAI-NILAI PADA MODAL EDIT
const form = document.getElementById('formEdit');
const btnEditPost = document.querySelectorAll('.btnEditPost');
btnEditPost.forEach(card => {
  // SOURCE
  const cardContent = card.parentElement.parentElement.parentElement.parentElement.parentElement;
  const idSource = cardContent.querySelector('.idSource').innerHTML.trim();
  const imageSource = cardContent.querySelector('.imageSource').src;
  const pengajuSource = cardContent.querySelector('.pengajuSource').innerHTML.trim();
  const jamPublikasiSource = cardContent.querySelector('.jamPublikasiSource').innerHTML.trim();
  const hariPublikasiSource = cardContent.querySelector('.hariPublikasiSource').innerHTML.trim();
  const namaBarangSource = cardContent.querySelector('.namaBarangSource').innerHTML.trim();
  const deskripsiSource = cardContent.querySelector('.deskripsiSource').innerHTML.trim();
  const lokasiKehilanganSource = cardContent.querySelector('.lokasiKehilanganSource').innerHTML.trim();
  const lokasiDitemukanSource = cardContent.querySelector('.lokasiDitemukanSource').innerHTML.trim();
  const lokasiDisimpanSource = cardContent.querySelector('.lokasiDisimpanSource').innerHTML.trim();
  const tanggalKehilanganSource = cardContent.querySelector('.etgl_kehilangan').innerHTML.trim();
  const tanggalDitemukanSource = cardContent.querySelector('.etgl_ditemukan').innerHTML.trim();
  const noTelpPengajuSource = cardContent.querySelector('.noTelpPengajuSource').innerHTML.trim();
  const staticElementsSource = [pengajuSource, jamPublikasiSource, hariPublikasiSource];
  const editElementsSource = [namaBarangSource, deskripsiSource, lokasiKehilanganSource, lokasiDitemukanSource, tanggalKehilanganSource, tanggalDitemukanSource, noTelpPengajuSource, lokasiDisimpanSource];

  // POPUP DETAILS
  let image = document.querySelector('.eimage');
  let pengaju = document.querySelector('.enama_akun');
  let jamPublikasi = document.querySelector('.etgl_ajukan_time');
  let hariPublikasi = document.querySelector('.etgl_ajukan_date');
  let namaBarang = document.querySelector('[name="ejudul_postingan"]');
  let deskripsi = document.querySelector('[name="edeskripsi_postingan"]');
  let lokasiKehilangan = document.querySelector('[name="elokasi_kehilangan"]');
  let lokasiDitemukan = document.querySelector('[name="elokasi_ditemukan"]');
  let lokasiDisimpan = document.querySelector('[name="elokasi_disimpan"]');
  let tanggalKehilangan = document.querySelector('[name="etgl_kehilangan"]');
  let tanggalDitemukan = document.querySelector('[name="etgl_ditemukan"]');
  let noTelpPengaju = document.querySelector('[name="eno_telp"]');
  let staticElements = [pengaju, jamPublikasi, hariPublikasi];
  let editElements = [namaBarang, deskripsi, lokasiKehilangan, lokasiDitemukan, tanggalKehilangan, tanggalDitemukan, noTelpPengaju, lokasiDisimpan];

  // ON CLICK ACTION @CARD
  card.addEventListener("click", function () {
    // Mengganti form Action sesuai ID postingan yang diklik
    var url = form.action;
    var urlBaru = url.replace(/\d+$/g, "") + idSource;
    form.action = urlBaru
    console.log(form.action);
    // \d+ mencocokkan satu atau lebih digit angka.
    // $ menandakan akhir dari string.
    // /g menandakan pencarian akan dilakukan secara global, sehingga akan menghapus semua angka yang berada di akhir string.

    image.src = imageSource;
    // Static Elements
    staticElements.forEach((element, index) => {
      // console.log(element);
      // console.log(staticElementsSource[index]);
      element.innerHTML = staticElementsSource[index];
    });
    // Edit Elements
    editElements.forEach((element, index) => {
      // console.log(element);
      // console.log(editElementsSource[index]);
      if (editElementsSource[index] == "-" || editElementsSource[index] === "-") {
        // console.log(true);
      } else {
        // console.log(false);
      }
      if (editElementsSource[index] != '-' && editElementsSource[index] != '' && editElementsSource[index] != null) {
        element.value = editElementsSource[index];
      } else {
        element.value = '';
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