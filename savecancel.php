<?php
include("Api.php");
$absen = new Api();
$data = json_decode(file_get_contents('php://input'), true);
try {
	//simpan ke tabel absen
	$sql = "DELETE FROM absen WHERE
			Nip = '".$data["Nip"]."'
			AND Tanggal='".$data["Tanggal"]."' ";
	$absen->conn->query($sql);
	echo "Successfully. Query : ".$sql;
}catch(PDOException $e){
	echo "Failed saving to database : ".$e->getMessage();
}
?>