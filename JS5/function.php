<?php
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam. ", ";
    echo "Perkenalkan, nama saya " .$nama. "</br>";
    echo "Senang berkenalan dengan Anda </br>";
}
perkenalan("May", "Halo");
echo "<hr>";

$saya = "Citra";
$ucapanSalam="Selamat Pagi";

perkenalan($saya);
?>