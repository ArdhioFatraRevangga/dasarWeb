<?php
$hargaAsli = 120000;
$persentaseDiskon = 20;
$ambangBatasDiskon = 100000;

if ($hargaAsli > $ambangBatasDiskon) {
    $jumlahDiskon = ($persentaseDiskon / 100) * $hargaAsli;
    $hargaAkhir = $hargaAsli - $jumlahDiskon;
} else {
    $hargaAkhir = $hargaAsli;
}

// hasil
echo "Harga Asli: Rp " . number_format($hargaAsli, 0, ',', '.') . "<br>";
echo "Jumlah Diskon: Rp " . number_format($jumlahDiskon ?? 0, 0, ',', '.') . "<br>";
echo "Harga Akhir yang Harus Dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.') . "<br>";
?>
