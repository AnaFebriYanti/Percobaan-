<?php
$kalimat = "Halo Perkenalkan Diri Dulu Yuk";
echo "Panjang Huruf Tersebut adalah(Termasuk Spasi)  : " . strlen($kalimat) . "\n";
echo "<br>";
echo "Jumlah Kata Dalam Kalimat Tersebut adalah      : " . str_word_count($kalimat) . "\n";
echo "<br>";
echo "Jumlah Spasi Dalam Kalimat Tersebut adalah     : " . substr_count($kalimat, " ") . "\n";
echo "<br>";
echo "Jumlah Huruf 'u' Dalam Kalimat Tersebut Adalah : " . substr_count($kalimat, "u") . "\n";
echo "<br>";
$utk_arr = ["Halo", "Perkenalkan", "Diri", "Dulu", "Yuk"];
sort($utk_arr);
echo "Hasilnya secara ascending adalah seperti ini   : " . implode(" ", $utk_arr)."\n";
echo "<br>";
rsort($utk_arr);
echo "Hasilnya secara Descending adalah seperti ini  : ".implode(" ", $utk_arr)."\n";
?>