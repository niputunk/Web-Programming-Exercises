<?php

$namaFile = "datamhs.txt";
$myFile = fopen($namaFile, "a") or die("Tidak bisa membuka file!");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgllahir = $_POST['tanggallahir'];
$tmplahir = $_POST['tempatlahir'];

fwrite($myFile, "\n".$nim."|".$nama."|".$tgllahir."|".$tmplahir."");
fclose($myFile);
echo "Berhasil menambahkan data";
?>