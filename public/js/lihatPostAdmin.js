const cards = document.querySelectorAll('.card-img');
cards.forEach(card => {
    // SOURCE
    const imageSource = card.parentElement.querySelector('.imageSource').src;
    const pengajuSource = card.parentElement.querySelector('.pengajuSource').innerHTML.trim();
    const jamPublikasiSource = card.parentElement.querySelector('.jamPublikasiSource').innerHTML.trim();
    const hariPublikasiSource = card.parentElement.querySelector('.hariPublikasiSource').innerHTML.trim();
    const namaBarangSource = card.parentElement.querySelector('.namaBarangSource').innerHTML.trim();
    const deskripsiSource = card.parentElement.querySelector('.deskripsiSource').innerHTML.trim();
    const lokasiKehilanganSource = card.parentElement.querySelector('.lokasiKehilanganSource').innerHTML.trim();
    const lokasiDitemukanSource = card.parentElement.querySelector('.lokasiDitemukanSource').innerHTML.trim();
    const lokasiDisimpanSource = card.parentElement.querySelector('.lokasiDisimpanSource').innerHTML.trim();
    const tanggalKehilanganSource = card.parentElement.querySelector('.tanggalKehilanganSource').innerHTML.trim();
    const tanggalDitemukanSource = card.parentElement.querySelector('.tanggalDitemukanSource').innerHTML.trim();
    const noTelpPengajuSource = card.parentElement.querySelector('.noTelpPengajuSource').innerHTML.trim();
    const sourceElements = [pengajuSource, jamPublikasiSource, hariPublikasiSource, namaBarangSource, deskripsiSource, lokasiKehilanganSource, lokasiDitemukanSource, tanggalKehilanganSource, tanggalDitemukanSource, noTelpPengajuSource, lokasiDisimpanSource];

    const statusBarangSource = card.parentElement.querySelector('.statusBarangSource').innerHTML.trim();

    // POPUP DETAILS
    let image = document.querySelector('.image');
    let pengaju = document.querySelector('.pengaju');
    let jamPublikasi = document.querySelector('.jamPublikasi');
    let hariPublikasi = document.querySelector('.hariPublikasi');
    let namaBarang = document.querySelector('.namaBarang');
    let deskripsi = document.querySelector('.deskripsi');
    let lokasiKehilangan = document.querySelector('.lokasiKehilangan');
    let lokasiDitemukan = document.querySelector('.lokasiDitemukan');
    let lokasiDisimpan = document.querySelector('.lokasiDisimpan');
    let tanggalKehilangan = document.querySelector('.tanggalKehilangan');
    let tanggalDitemukan = document.querySelector('.tanggalDitemukan');
    let noTelpPengaju = document.querySelector('.noTelpPengaju');
    let popupElements = [pengaju, jamPublikasi, hariPublikasi, namaBarang, deskripsi, lokasiKehilangan, lokasiDitemukan, tanggalKehilangan, tanggalDitemukan, noTelpPengaju, lokasiDisimpan];

    // let statusBarang = document.querySelector('.statusBarang');
    let statusBarangKehilangan = document.querySelector('.statusBarangKehilangan');
    let statusBarangDitemukan = document.querySelector('.statusBarangDitemukan');

    // ON CLICK ACTION @CARD
    card.addEventListener("click", function () {
        image.src = imageSource;
        if (statusBarangSource == 'Ditemukan' || statusBarangSource == 'ditemukan') {
            statusBarangDitemukan.classList.remove('d-none')
            statusBarangKehilangan.classList.add('d-none')
        } else {
            statusBarangDitemukan.classList.add('d-none')
            statusBarangKehilangan.classList.remove('d-none')
        }
        popupElements.forEach((element, index) => {
            console.log(element);
            console.log(sourceElements[index]);
            if (sourceElements[index] != '-') {
                element.parentElement.classList.remove('d-none')
                element.innerHTML = sourceElements[index];
            } else {
                element.parentElement.classList.add('d-none')
            }
        });

        // JUST IN CASE BUTUH CHECK NULL ARRAY
        // if (sourceElements.includes(null)) {
        //     console.log("Source berisi null.");
        // } else {
        //     console.log("Source tidak berisi null.");
        // }
        // if (popupElements.includes(null)) {
        //     console.log("Popup berisi null.");
        // } else {
        //     console.log("Popup tidak berisi null.");
        // }
    })
})