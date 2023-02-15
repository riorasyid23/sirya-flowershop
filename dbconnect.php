<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "siryaflo_shop";
// isi nama host, username mysql, dan password mysql anda
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()){
	echo "gagal konek database";
	exit();
}

?>