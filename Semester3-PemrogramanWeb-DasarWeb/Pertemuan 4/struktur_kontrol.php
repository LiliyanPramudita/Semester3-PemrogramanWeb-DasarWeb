<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B<br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C<br>";
} else {
    echo "Nilai huruf: D<br>";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk 
mencapai jarak 500 kilometer.<br><br>";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: " . $jumlahBuah . "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: " . $totalSkor . "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br><br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiYangDigunakan = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4);

$totalNilai = array_sum($nilaiYangDigunakan);

echo "Daftar nilai siswa: " . implode(', ', $nilaiSiswa) . "<br>";
echo "Setelah mengabaikan dua nilai terendah dan dua nilai tertinggi, 
nilai yang digunakan adalah: " . implode(', ', $nilaiYangDigunakan) . "<br>";
echo "Total nilai yang akan digunakan untuk rata-rata adalah: $totalNilai";

echo "<br><br>";

$hargaProduk = 120000;
$ambangDiskon = 100000;
$persenDiskon = 0.20; 
$hargaYangHarusDibayar = $hargaProduk;

if ($hargaProduk > $ambangDiskon) {
    $diskon = $hargaProduk * $persenDiskon;
    $hargaYangHarusDibayar = $hargaProduk - $diskon;
    echo "Harga produk: Rp " . number_format($hargaProduk) . "<br>";
    echo "Anda mendapatkan diskon sebesar 20% (Rp " . number_format($diskon) . ").<br>";
} else {
    echo "Harga produk: Rp " . number_format($hargaProduk) . "<br>";
    echo "Anda tidak mendapatkan diskon.<br>";
}

echo "Harga yang harus dibayar adalah: Rp " . number_format($hargaYangHarusDibayar);

echo "<br><br>";

$skorPemain = 650;

$dapatHadiah = ($skorPemain > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $skorPemain<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $dapatHadiah";
?>