<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    
    <!-- Form with password field -->
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>

        <input type="submit" value="Submit">
    </form>

    <!-- Div for displaying the result -->
    <div id="result"></div>

    <!-- jQuery AJAX script with password validation -->
    <script>
        $(document).ready(function () {
            // Handle form submission
            $('#myForm').submit(function (e) {
                e.preventDefault();  // Prevent default form submission

                // Get form data
                var formData = $(this).serialize();
                var password = $('#password').val();

                // Password validation
                if (password.length < 8) {
                    $('#result').html("Password harus minimal 8 karakter.");
                    return;
                }

                // AJAX request if password is valid
                $.ajax({
                    type: 'POST',
                    url: 'proses_validasi.php',  // The PHP script that handles the request
                    data: formData,
                    success: function (response) {
                        // Display response in the result div
                        $('#result').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $errors = array();

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}
?>



