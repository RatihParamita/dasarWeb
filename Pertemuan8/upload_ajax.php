<?php
/*if(isset($_FILES['file'])){
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    $extentions = array("pdf", "doc", "docx", "txt");

    if(in_array($file_ext, $extentions) === false){
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    if($file_size > 2097152){
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    if(empty($errors) == true){
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else{
        echo implode(" ", $errors);
    }
}*/

if(isset($_FILES['files'])){
    $errors = array();
    $uploaded_files = array();
    foreach($_FILES['files']['tmp_name'] AS $key => $tmp_name){
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        @$file_ext = strtolower("" . end(explode('.', $file_name)) . "");
        $extentions = array("jpg", "jpeg", "png");

        if(!in_array($file_ext, $extentions)){
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, dan PNG.";
        }

        if($file_size > 2097152){
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        if(empty($errors) == true){
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            $uploaded_files[] = $file_name;
        }
    }

    if(empty($errors)){
        foreach($uploaded_files AS $file){
            echo "<br>File $file berhasil diunggah.";
        }
    } else{
        echo implode(" ", $errors);
    }
}
?>