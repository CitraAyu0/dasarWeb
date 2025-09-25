<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

echo "<br><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    echo "Hari ke-$hari : Jarak yang ditempuh = $jarakSaatIni km<br>";
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++) { 
    $buahLahan = $tanamanPerLahan * $buahPerTanaman;
    $jumlahBuah += $buahLahan;
    echo "Lahan ke-$i: $tanamanPerLahan tanaman x $buahPerTanaman buah = $buahLahan buah<br>";
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah buah";

echo "<br><br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) { 
    $totalSkor += $skor;
}
echo "Daftar skor ujian: " . implode(", ", $skorUjian) . "<br>";
echo "Total skor ujian adalah : $totalSkor";

echo "<br><br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}

echo "<br><br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
echo "Daftar nilai siswa: " . implode(", ", $nilaiSiswa) . "<br>";

sort($nilaiSiswa);
echo "Daftar nilai setelah sorting: " . implode(", ", $nilaiSiswa) . "<br>";

array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);
$totalNilai = array_sum($nilaiSiswa);
echo "Total nilai (setelah mengabaikan 2 nilai tertinggi & 2 nilai terendah): $totalNilai<br>";
$rataRata = $totalNilai / count($nilaiSiswa);
echo "Rata-rata nilai: rataRata";


echo "<br><br>";
$hargaProduk = 120000;
$diskon = 0;
$persentaseDiskon = 20;

echo "Harga produk sebelum diskon: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";

if ($hargaProduk > 100000) {
    echo "Karena harga produk lebih dari Rp 100.000, maka mendapat diskon sebesar $persentaseDiskon%.<br>";
    $diskon = ($persentaseDiskon / 100) * $hargaProduk;
} else {
    echo "Harga produk tidak memenuhi syarat diskon.<br>";
}

$hargaAkhir = $hargaProduk - $diskon;

echo "Besar diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga setelah diskon: Rp " . number_format($hargaAkhir, 0, ',', '.') . "<br>" ;

echo "<br><br>";
$totalSkor = 550; 
echo "Total skor pemain adalah: $totalSkor <br>";

$hadiah = ($totalSkor > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>