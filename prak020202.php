<html>
	<head>Tabel</head>
	<body>
<?php
$nomor = 1;
$baris = 4;
$kolom = 5;
echo "<table border='1'>";
for ($i = 0; $i < $kolom; $i++){
	echo "<tr>";
	for ($j = 0; $j < $baris; $j++){
		echo "<td><center>$nomor</center></td>";
		$nomor = $nomor + 1;	
	}
	echo "</tr>";
}
echo "</table>";
?>
	</body>
</html>