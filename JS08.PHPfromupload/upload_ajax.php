<?php
if (isset($_FILES['file'])) {
    $errors = array();
    
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
    $extensions = array("jpg", "jpeg", "png", "pdf", "doc", "docx");
    
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, JPG, JPEG, atau PNG.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB.';
    }

    $mime_types = array('image/jpeg', 'image/png', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    
    if (!in_array($file_type, $mime_types)) {
        $errors[] = 'Tipe file yang diizinkan adalah JPEG, PNG, PDF, DOC, atau DOCX.';
    }

    if (empty($errors) == true) {
        $upload_dir = "uploads/";  
        
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true); 
        }

        move_uploaded_file($file_tmp, $upload_dir . $file_name);
        
        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
?>
