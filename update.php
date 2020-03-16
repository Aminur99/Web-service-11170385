<?php
include("Api.php");
$absen = new Api();
$data = ['Tanggal' => $_GET["Tanggal"],
		'Nip'=> $_GET["Nip"]];
echo $absen->put("http://localhost/absensi/saveupdate.php",$data);
?>