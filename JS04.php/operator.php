<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: $hasilTambah <br>" ;
echo "Hasil Kurang: $hasilKurang <br>";
echo "Hasil Kali: $hasilKali <br>";
echo "Hasil Bagi: $hasilBagi<br>";
echo "Sisa Bagi: $sisaBagi<br>";
echo "Pangkat: $pangkat<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilsama =  $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah A sama dengan B? " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Apakah A tidak sama dengan B? " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Apakah A lebih kecil dari B? " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah A lebih besar dari B? " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Apakah A lebih kecil atau sama dengan B? " . ($hasilLebihKecilsama ? 'true' : 'false') . "<br>";
echo "Apakah A lebih besar atau sama dengan B? " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (A && B): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR (A || B): " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A (!A): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B (!B): " . ($hasilNotB ? 'true' : 'false') . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Setelah A += B: $a <br>";
echo "Setelah A -= B: $a <br>";
echo "Setelah A *= B: $a <br>";
echo "Setelah A /= B: $a <br>";
echo "Setelah A %= B: $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah A identik dengan B? " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah A tidak identik dengan B? " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>