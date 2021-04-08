<?php

function hitungGaji ($gol, $masaKerja){
	if ($gol == "A"){
		if ($masaKerja<10){
			$gaji=5000000;
		} else {
			$gaji=7000000;
		}
	} else if ($gol=="B"){
		if ($masaKerja<10){
			$gaji=6000000;
		} else {
			$gaji=8000000;
		}
	}
	return $gaji;
}
echo "Gaji karyawan golongan A dengan masa kerja 5 tahun sebesar Rp.".hitungGaji("A", 5);
echo " dan gaji karyawan golongan B dengan masa kerja 12 tahun sebesar Rp.".hitungGaji("B", 13);
?>