<?php 

include "conexao.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$sql = "SELECT usuario, senha FROM login WHERE senha = '$senha' AND usuario = '$usuario';";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn)){
	session_start();
	$_SESSION['nome'] = $usuario;
	header("location:homepage.php");
} else{
	echo "Usuário ou senha inválido(a)<br>";
	echo "<a href='index.php'>Voltar</a>";
}


?>