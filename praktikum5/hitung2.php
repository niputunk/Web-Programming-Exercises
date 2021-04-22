<?php
// baca kedua bilangan
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];
// proses perhitungan
if (isset($POST['penjumlahan'])){
$hasil = $bil1 + $bil2;
$op = "+";
} else if (isset($POST['pengurangan'])){
$hasil = $bil1 - $bil2;
$op = "-";
} else if (isset($POST['perkalian']))){
$hasil = $bil1 * $bil2;
$op = "x";
} else if (isset($POST['pembagian'])){
$hasil = $bil1 / $bil2;
$op = "/";
} else if (isset($POST['perpangkatan'])){
$hasil = $bil1 ** $bil2;
$op = "^";
}
// menampilkan hasil perhitungan
echo "<h2>".$bil1." ".$op." ".$bil2." = ".$hasil."</h2>";
?>