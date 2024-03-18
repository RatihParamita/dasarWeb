<?php
function perkenalan(){
    echo "Syalom, <br/>";
    echo "Perkenalkan, nama saya Tita.<br/>";
    echo "Senang berkenalan dengan Anda.<br/>";
}
perkenalan();
perkenalan();

function perkenalan2($nama, $salam){
    echo $salam.", <br/>";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan2("Hamdana", "Hallo");
echo "<hr>";

$saya = "Tita";
$ucapanSalam = "Selamat pagi";
perkenalan2($saya, $ucapanSalam);

function perkenalan3($nama, $salam="Syalom"){
    echo $salam.", <br/>";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan3($saya);

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang-$thn_lahir;
    return $umur;
}
echo "Umur saya adalah ". hitungUmur(2004, 2024) ." tahun<br/>";

function perkenalan4($nama, $salam="Syalom"){
    echo $salam.", <br/>";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Saya berusia ". hitungUmur(2004, 2024) ." tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan4("Tita");
?>