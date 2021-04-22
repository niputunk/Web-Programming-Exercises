<?php
$phi = 22/7;
$nama = $_GET['n'];
$d = $_GET['d'];
$t = $_GET['t'];
$lSelimut = ($phi * $diameter) * $tinggi;
$lAlas = ($phi * ($diameter ** 2)) / 4;
$lTabung = round($lSelimut + (2 * $lAlas), 2);

echo ("Luas tabung $nama dengan diameter $diameter dan tinggi $tinggi adalah $lTabung satuan luas");
?>