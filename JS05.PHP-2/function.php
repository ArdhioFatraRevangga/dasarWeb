<?php

function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana","(Hallo)");

echo "<hr>";

$saya = "Fatra";
$ucapanSalam = "Selamat pagi";

perkenalan($saya, $ucapanSalam);
?>