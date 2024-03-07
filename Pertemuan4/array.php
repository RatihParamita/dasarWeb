<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6]
];
$karyawanLimaTahun = [];
foreach($daftarKaryawan as $karyawan){
    if($karyawan[1] > 5){
        $karyawanLimaTahun[] = $karyawan[0];
    }
}

echo "<br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78]
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75]
    ],
    'Kimia'=> [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85]
    ]
];
$mataKuliah = 'Fisika';

echo "<br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
}

//Jawaban Soal Cerita
$daftarNilaiMat = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];
$daftarNilaiMatLulus = [];
$totalNilai = 0;

foreach ($daftarNilaiMat as $nilai) {
    $totalNilai += $nilai[1];
}

$rataRata = $totalNilai / count($daftarNilaiMat);

foreach($daftarNilaiMat as $siswa){
    if($siswa[1] > $rataRata){
        $daftarNilaiMatLulus[] = $siswa[0];
    }
}

echo "<br>Nilai rata-rata ujian Matematika: $rataRata";
echo "<br>Daftar siswa yang lulus ujian Matematika: " . implode(', ', $daftarNilaiMatLulus);
?>