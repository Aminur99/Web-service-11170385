<?php
include("Api.php");
$absen = new Api();
$data = json_decode(file_get_contents('php://input'), true);
try {
	//simpan ke tabel absen
	$sql = "INSERT INTO absen
			(Nip,Tanggal,Jam_masuk,Jam_keluar)
			VALUES ('".$data["Nip"]."',
			'".$data["Tanggal"]."',
			'".$data["Jam_masuk"]."',
			'".$data["Jam_keluar"]."')";
	$absen->conn->query($sql);
echo "Successfully";
}catch(PDOException $e){
	echo "Failed saving to database : ".$e->getMessage();
}
?>