<?php
include("Api.php");
$absen = new Api();
$data = [
	'Nip' => $_GET["Nip"],
	'Tanggal'=>date('Y-m-d'),
	'Jam_masuk'=>date('H:i:s'), 
	'Jam_keluar'=>date('H:i:s'),
	'absen'=>['Nip'=> $_GET["Nip"]]
	];
echo $absen->post("http://localhost/absensi/submit.php",$data);
?>