<?php
include("Api.php");
$absen = new Api();
$data = ['Tanggal' => $_GET["Tanggal"],
		'Nip' => $_GET["Nip"] ];
echo $absen->post("http://localhost/absensi/savecancel.php",$data);
?>