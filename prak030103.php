<?php
function buatBintanglagi($n){
	echo "<pre>";
	for ($i=0; $i<$n; $i++){
		for ($j=$n; $i<$j; $j--){
			echo "*";
		}
		echo "\n";
	}
	echo "</pre>";
}

buatBintanglagi(4);
buatBintanglagi(5);
?>

	