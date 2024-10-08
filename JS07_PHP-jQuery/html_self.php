<?php
// Mengambil input dari form (pastikan metode POST digunakan)
$email = $_POST['email'];

// Mengecek apakah email valid menggunakan filter_var() dengan FILTER_VALIDATE_EMAIL
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Jika valid, tampilkan pesan bahwa email valid
    echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
} else {
    // Jika tidak valid, tampilkan pesan error
    echo "Email tidak valid.";
}
?>
