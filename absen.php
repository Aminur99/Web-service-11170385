<?php
include ("Api.php");
$limit		= isset($_GET['limit']) ? (int) $_GET['limit'] : 0;
$keyword	= isset($_GET['Nip']) ? $_GET['Nip'] : '';
$absen		= new Api();
echo $absen->get($keyword, $limit);
?>