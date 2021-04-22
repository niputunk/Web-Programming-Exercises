<?php

$namaFile = "datatabung.txt";
$myFile = fopen($namaFile, "r") or die("Tidak bisa membuka file ini!");

echo "<h2>Data Ukuran Tabung</h2>";

echo "<table border='1'>";
echo("<tr>
	<th>Nama Tabung</th> <th>Diameter</th> <th>Tinggi</th> <th>Luas</th>
	</tr>");

while (!feof($myFile)){
	echo("<tr>");
	$dataTabung = explode(",", fgets($myFile));

	$link = "http://localhost/niputunk/hitungluas.php?n=$dataTabung[0]&d=$dataTabung[1]&t=$dataTabung[2]";
	echo("
		<td>$dataTabung[0]</td> <td>$dataTabung[1]</td> <td>$dataTabung[2]</td> <td><a href=$link target='_blank'>view</a></td>
		");
	echo("</tr>");
};

echo("</table>");

fclose($myFile);
?>