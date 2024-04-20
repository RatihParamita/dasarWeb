<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "prakwebdb";

    $connect = mysqli_connect($namaHost, $username, $password, $database);
    
    if ($connect) {
        echo "Koneksi dengan MySQL berhasil.<br>";
    } else {
        echo "Koneksi dengan MySQL gagal.<br>" . mysqli_connect_error();
    }
?>