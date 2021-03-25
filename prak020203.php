<html>
	<head>Tabel</head>
	<body>
		<?php
		$nomor = 1;
		$baris = 4;
		$kolom = 5;
		echo "<table border='1'>";
		for ($i = 0; $i < $baris; $i++){
			echo "<tr>";
				for ($j=0; $j<5; $j++) {
					if($nomor % 2 == 0){
						echo "<td style=background-color:red; color:white >$nomor</td>";
						$nomor=$nomor + 1;
					}
					else {
						echo "<td style=background-color:white; color:red >$nomor</td>";	
						$nomor=$nomor + 1;						
					}
				}
			echo "</tr>";
		}
	echo "</table>";
	?>
	</body>
</html>