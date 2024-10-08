<?php 
 $pattern = '/go{1,2}d/'; // Pola regex: "o" harus muncul 1 atau 2 kali
 $text = 'god is good. goood is not allowed.'; // Teks yang akan dicocokkan
 
 // Lakukan pencocokan menggunakan preg_match_all agar semua kecocokan ditemukan
 if (preg_match_all($pattern, $text, $matches)) {
     // Tampilkan semua kecocokan
     echo "Cocokkan: " . implode(', ', $matches[0]);
 } else {
     echo "Tidak ada yang cocok!";
 }
// $pattern = '/apple/'; // Pola regex untuk menemukan kata "apple"
// $replacement = 'banana'; // Pengganti kata "apple" dengan "banana"
// $text = 'I like apple this.'; // Teks yang akan diproses

// // Ganti kata "apple" dengan "banana"
// $new_text = preg_replace($pattern, $replacement, $text);

// // Tampilkan hasil teks yang sudah diganti
// echo $new_text;
?>
