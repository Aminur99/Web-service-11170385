<?php
include("Api.php");
$absen = new Api();
$data = json_decode(file_get_contents('php://input'), true);
try {
	//simpan ke tabel order detail
	$sql = "UPDATE absen SET
			Tanggal='".$data["Tanggal"]."'
			WHERE Nip = '".$data["Nip"]."' ";
	$absen->conn->query($sql);
	echo "Successfully. Query : ".$sql;
}catch(PDOException $e){
	echo "Failed saving to database : ".$e->getMessage();
}
?>