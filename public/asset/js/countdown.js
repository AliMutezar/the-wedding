function hitungMundur() {
    var targetDate = new Date('2023-12-23T15:30:00Z');
    var hariElem = document.getElementById('hari');
    var jamElem = document.getElementById('jam');
    var menitElem = document.getElementById('menit');
    var detikElem = document.getElementById('detik');

    function updateWaktu() {
        var now = new Date();
        var selisihWaktu = targetDate - now;

        if (selisihWaktu <= 0) {
            hariElem.textContent = '0';
            jamElem.textContent = '0';
            menitElem.textContent = '0';
            detikElem.textContent = '0';
        } else {
            var hari = Math.floor(selisihWaktu / (1000 * 60 * 60 * 24));
            var jam = Math.floor((selisihWaktu % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var menit = Math.floor((selisihWaktu % (1000 * 60 * 60)) / (1000 * 60));
            var detik = Math.floor((selisihWaktu % (1000 * 60)) / 1000);

            hariElem.textContent = hari;
            jamElem.textContent = jam;
            menitElem.textContent = menit;
            detikElem.textContent = detik;

            setTimeout(updateWaktu, 1000);
        }
    }

    updateWaktu();
}

// Memanggil fungsi hitungMundur saat halaman telah dimuat
window.onload = function () {
    hitungMundur();
};