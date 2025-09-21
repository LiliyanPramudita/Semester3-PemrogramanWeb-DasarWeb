<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $sisaBagi . "<br>";
echo "Pangkat: " . $pangkat . "<br>";

echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah " . $a . " sama dengan " . $b . "? " . $hasilSama . "<br>";
echo "Apakah " . $a . " tidak sama dengan " . $b . "? " . $hasilTidakSama . "<br>";
echo "Apakah " . $a . " lebih kecil dari " . $b . "? " . $hasilLebihKecil . "<br>";
echo "Apakah " . $a . " lebih besar dari " . $b . "? " . $hasilLebihBesar . "<br>";
echo "Apakah " . $a . " lebih kecil sama dengan " . $b . "? " . $hasilLebihKecilSama . "<br>";
echo "Apakah " . $a . " lebih besar sama dengan " . $b . "? " . $hasilLebihBesarSama . "<br>";

echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Apakah " . $a . " dan " . $b . " benar? " . $hasilAnd . "<br>";
echo "Apakah " . $a . " atau " . $b . " benar? " . $hasilOr . "<br>";
echo "Apakah " . $a . " tidak benar? " . $hasilNotA . "<br>";
echo "Apakah " . $b . " tidak benar? " . $hasilNotB . "<br>";

echo "<br><br>";

$awal = $a;
$a += $b;
echo "Hasil $awal += $b : $a <br>";

$awal = $a;
$a -= $b;
echo "Hasil $awal -= $b : $a <br>";

$awal = $a;
$a *= $b;
echo "Hasil $awal *= $b : $a <br>";

$awal = $a;
$a /= $b;
echo "Hasil $awal /= $b : $a <br>";

$awal = $a;
$a %= $b;
echo "Hasil $awal %= $b : $a <br>";

echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: " . $hasilIdentik . "<br>";
echo "Hasil Tidak Identik: " . $hasilTidakIdentik . "<br><br>";

echo "<br><br>";

$totalKursi = 45;      
$terisi = 28;          
$kosong = $totalKursi - $terisi; 

$persentaseKosong = ($kosong / $totalKursi) * 100; 

echo "Total kursi: $totalKursi <br>";
echo "Kursi terisi: $terisi <br>";
echo "Kursi kosong: $kosong <br>";
echo "Persentase kursi kosong: $persentaseKosong %<br>";
?> 