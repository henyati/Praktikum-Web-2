<?php 

// Buat Fungsi
function hitungUmur($thn_lahir) {
    $thn_sekarang = 2023;
    // hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // kembaliin data umur
    return $umur;
}
echo hitungUmur(2004);

?>