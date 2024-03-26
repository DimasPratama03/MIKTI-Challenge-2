<?php
function cek_pemenang($skor_lumba_lumba, $skor_koala) {
    // Menghitung skor rata-rata
    $rata_rata_lumba_lumba = array_sum($skor_lumba_lumba) / count($skor_lumba_lumba);
    $rata_rata_koala = array_sum($skor_koala) / count($skor_koala);

    // Mencetak skor rata-rata
    echo "Lumba-Lumba (".implode(", ", $skor_lumba_lumba).") : ".number_format($rata_rata_lumba_lumba, 2)."\n";
    echo "Koala (".implode(", ", $skor_koala).") : ".number_format($rata_rata_koala, 2)."\n";

    // Membuat perbandingan untuk menentukan pemenang
    if ($rata_rata_lumba_lumba > $rata_rata_koala) {
        echo "Hasil: Tidak ada tim yang memenangkan trofi\n";
    } elseif ($rata_rata_koala > $rata_rata_lumba_lumba) {
        echo "Hasil: Koala Menang\n";
    } else {
        echo "Hasil: Tim Seri\n";
    }
}

// Data uji
echo "Data 1 :\n";
cek_pemenang(array(97, 108, 89), array(89, 91, 110));

echo "\nData Bonus 1 :\n";
cek_pemenang(array(97, 112, 101), array(109, 95, 123));

echo "\nData Bonus 2 :\n";
cek_pemenang(array(97, 112, 101), array(109, 95, 106));
?>
