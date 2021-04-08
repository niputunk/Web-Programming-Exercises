<?php
function hitungDenda($tglHarusKembali, $tglKembali){
	$tgl1 = explode("-", $tglHarusKembali);
	$hari1 = $tgl1[2];
	$bulan1 = $tgl1[1];
	$tahun1 = $tgl1[0];
	
	$tgl2 = explode("-", $tglKembali);
	$hari2 = $tgl2[2];
	$bulan2 = $tgl2[1];
	$tahun2 = $tgl2[0];
	
	$jd1 = GregorianToJD($bulan1, $hari1, $tahun1);
	$jd2 = GregorianToJD($bulan2, $hari2, $tahun2);
	
	$selisih = $jd2 - $jd1;
	$denda = $selisih * 3000;
	
	return $denda;
}
echo "Besarnya denda adalah Rp".hitungDenda("2021-01-03", "2021-01-05");
	