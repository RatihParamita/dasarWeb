<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil tambah: {$hasilTambah} <br>";
echo "Hasil kurang: {$hasilKurang} <br>";
echo "Hasil kali: {$hasilKali} <br>";
echo "Hasil bagi: {$hasilBagi} <br>";
echo "Sisa bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "a sama dengan b: {$hasilSama} <br>";
echo "a tidak sama dengan b: {$hasilTidakSama} <br>";
echo "a lebih kecil dari b: {$hasilLebihKecil} <br>";
echo "a lebih besar dari b: {$hasilLebihBesar} <br>";
echo "a lebih kecil sama dengan b: {$hasilLebihKecilSama} <br>";
echo "a lebih besar sama dengan b: {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil and: {$hasilAnd}<br>";
echo "Hasil or: {$hasilOr}<br>";
echo "Hasil Not a: {$hasilNotA}<br>";
echo "Hasil Not b: {$hasilNotB}<br>";

$TambahSama = $a += $b;
$KurangSama = $a -= $b;
$KaliSama = $a *= $b;
$BagiSama = $a /= $b;
$SisaBagiSama = $a %= $b;

echo "a += b: {$TambahSama}<br>";
echo "a -= b: {$KurangSama}<br>";
echo "a *= b: {$KaliSama}<br>";
echo "a /=b: {$BagiSama}<br>";
echo "a %= b: {$SisaBagiSama}<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "a identik dengan b: {$hasilIdentik}<br>";
echo "a tidak identik dengan b: {$hasilTidakIdentik}<br>";

//Jawaban Soal Cerita
$totalKursi = 45;
$ditempati = 28;
$kosong = $totalKursi - $ditempati;
$kosongPersen = $kosong / $totalKursi * 100;

echo "Kursi yang masih kosong di restoran adalah sebanyak {$kosongPersen}%.<br>";