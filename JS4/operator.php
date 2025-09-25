<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b ;
$hasilKurang = $a - $b;
$hasilKali = $a * $b ;
$hasilBagi = $a / $b ;
$sisaBagi = $a % $b ;
$pangkat = $a ** $b ;

echo "Nilai a : {$a} <br>";
echo "Nilai b : {$b} <br>";
echo "<br>";
echo "Hasil Penjumlahan (a + b) : {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b) : {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b) : {$hasilKali} <br>";
echo "Hasil Pembagian (a / b) : {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) : {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b) : {$pangkat} <br>";

echo "<br>";
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a == b ? : " . ($hasilSama ? "true" : "false") . "<br>";
echo "Apakah a != b ? : " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Apakah a < b ? : " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Apakah a > b ? : " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Apakah a <= b ? : " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Apakah a >= b ? : " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

echo "<br>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil (a && b) : " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil (a || b) : " . ($hasilOr ? "true" : "false") . "<br>";
echo "Hasil (!a) : " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Hasil (!b) : " . ($hasilNotB ? "true" : "false") . "<br>";

echo "<br>";
$a += $b;
echo "a += b : " . $a . "<br>";
$a -= $b;
echo "a -= b : " . $a . "<br>";
$a *= $b;
echo "a *= b : " . $a . "<br>";
$a /= $b;
echo "a /= b : " . $a . "<br>";
$a %= $b;
echo "a %= b : " . $a . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "a === b : " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "a !== b : " . ($hasilTidakIdentik ? "true" : "false") . "<br><br>";

$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: $totalKursi <br>";
echo "Kursi terisi: $kursiTerisi <br>";
echo "Kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: " . round($persenKosong, 2) . "%<br>";
?>
