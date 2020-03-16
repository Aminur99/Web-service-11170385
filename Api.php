<?php
class Api{
	
	public $conn;
	
	public function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "absensi";
		
		try {
			$this->conn = new PDO("mysql:host=$servername;dbname=$database",
							$username,$password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch (PDOException $e) {
			echo "Connection failed : ".$e->getMessage();
		}
	}
	
	public function get($keyword="",$limit=""){
		$limit	= isset($_GET['limit']) ? (int) $_GET['limit'] : 0;
		$nip	= isset($_GET['Nip']) ? $_GET['Nip'] : '';
		
		$sql_limit	= (!empty($limit))? ' LIMIT 0,'.$limit : '';
		$sql_nip	= (!empty($nip))? 'WHERE Nip='.$nip.'' : '';
		
		$sql = "SELECT * FROM absen ".$sql_nip." ".$sql_limit;
		$data = $this->conn->prepare($sql);
		$data->execute();
		$absen = [];
		while ($row = $data->fetch(PDO::FETCH_OBJ)){
			$absen[] = ["Nip"=>$row->Nip,
						   "Tanggal"=>$row->Tanggal,
						   "Jam_masuk"=>$row->Jam_masuk,
						   "Jam_keluar"=>$row->Jam_keluar];
		}
		
		$this->conn = null;
		header('Content-Type: application/json');
		
		$arr = array();
		$arr['info'] = 'success';
		$arr['num'] = count($absen);
		$arr['result'] = $absen;
		
		return json_encode(array('ITEMS'=>$arr),JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
		
	}
	
		public function post($url,$params) {
			$payload = json_encode ($params);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Content-Length: ' . strlen($payload))
			);
			$result = curl_exec($ch);
			curl_close($ch);
			return $result;
		}
		
		public function put($url,$params) {
			$payload = json_encode ($params);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Content-Length: ' . strlen($payload))
			);
			$result = curl_exec($ch);
			curl_close($ch);
			return $result;
		}
		
			public function cancel($url,$params) {
			$payload = json_encode ($params);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Content-Length: ' . strlen($payload))
			);
			$result = curl_exec($ch);
			curl_close($ch);
			return $result;
		}
	}
		
?>