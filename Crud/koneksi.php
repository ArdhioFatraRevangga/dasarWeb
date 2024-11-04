<?php

$koneksi = mysqli_connect("localHost", "root", "", "prakwebdb");

//periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
    
}