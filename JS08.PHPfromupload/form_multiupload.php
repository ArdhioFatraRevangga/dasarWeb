<!DOCTYPE html>
<html>
    <head>
        <tittle>Multi Upload images</tittle>
</head>
<body>
    <h2>Unggah Images</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".image"/>
        <input type="submit" value="Unggah"/>
</form>
</body>
</html>