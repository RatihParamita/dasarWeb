<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nlai huruf: C";
} elseif($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 km.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i=1; $i<=$jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "<br>Total skor ujian adalah: $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai){
    if($nilai < 60){
        echo "<br>Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "<br>Nilai: $nilai (lulus) <br>";
}

//Jawaban Soal Cerita 1
sort($nilaiSiswa);
$totalNilai = 0;
$jumlahSiswa = 0;
for($i=2; $i<8; $i++){
    $totalNilai += $nilaiSiswa[$i];
}
$jumlahSiswa = count($nilaiSiswa) - 4;
$rataRata = $totalNilai / $jumlahSiswa;

echo "Total nilai tanpa 2 nilai tertinggi dan 2 nilai terendah: $totalNilai <br>";
echo "Jumlah siswa tanpa 2 siswa dengan nilai tertinggi dan 2 siswa dengan nilai terendah: $jumlahSiswa <br>";
echo "Rata-rata nilai tanpa 2 nilai tertinggi dan 2 nilai terendah: $rataRata <br>";

//Jawaban Soal Cerita 2
$hargaProduk = 120000;
$diskon = 20/100;
$hargaDiskon = $hargaProduk*$diskon;
$pembelian = 0;

while($pembelian <= 100000){
    $pembelian +=1;
}

if($pembelian <= 100000){
    echo "Maaf, Anda belum mencapai harga pembelian untuk mendapatkan diskon.<br>";
} elseif($pembelian > 100000){
    $hargaProduk -= $hargaDiskon;
    echo "Selamat, Anda mendapatkan diskon sebesar 20%!<br>";
    echo "Total bayar: Rp$hargaProduk,00<br>";
}

//Jawaban Soal Cerita 3
$poinGame = [0, 100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

foreach($poinGame as $poin){
    $totalSkor = "Total skor pemain adalah: " . $poin;
    $hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";
    echo $totalSkor . "<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan . "<br>";
}
?>