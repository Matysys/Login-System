<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$db = "pizzaria";
$conn;

try{
$conn = mysqli_connect($hostname,$username,$password,$db);
}catch(Exception $e){
	echo "Falha ao se conectar.";
	return;
}
?>