<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $selectBuah = $_POST['buah'];

    if(isset($_POST['warna'])){
        $selectedWarna = $_POST['warna'];
    } else{
        $selectedWarna = [];
    }

    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo "Anda memilih buah: " . $selectBuah . "<br>";

    if(!empty($selectedWarna)){
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else{
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>