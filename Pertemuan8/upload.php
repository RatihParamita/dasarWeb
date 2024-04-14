<?php
if(isset($_POST["submit"])){
    //$targetDirectory = "uploads/";
    $targetDirectory = "documents/";
    //$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    //$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    //$allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    //$maxFileSize = 5*1024*1024;
    $maxFileSize = 10*1024*1024;

    /*if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
        echo "File berhasil diunggah.";
    } else{
        echo "Gagal mengunggah file.";
    }*/

    /*if(in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
            echo "File berhasil diunggah.<br><br>";
            echo '<img src="'.$targetFile.'"width="200" alt="Thumbnail">';
            echo "<br><br>Thumbnail berhasil dibuat.";
        } else{
            echo "Gagal mengunggah file.";
        }
    } else{
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }*/

    if(in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize){
        if(move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)){
            echo "Dokumen berhasil diunggah.<br><br>";
        } else{
            echo "Gagal mengunggah dokumen.";
        }
    } else{
        echo "Dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>