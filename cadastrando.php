<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];

$sql = "INSERT INTO login (nome, email, usuario, senha) VALUES ('$nome', '$email', '$usuario', '$senha');";

$equal = "SELECT email FROM login WHERE email = '$email';";
mysqli_query($conn, $equal);
if (mysqli_affected_rows($conn)){
	mysqli_close($conn);
	echo "<script>alert('E-mail já cadastrado.');</script>";
    echo "<script>document.location = 'cadastro.php';</script>";
	return;
}

$equaluser = "SELECT usuario FROM login WHERE usuario = '$usuario';";
mysqli_query($conn, $equaluser);
if (mysqli_affected_rows($conn)){
	mysqli_close($conn);
	echo "<script>alert('Usuário já cadastrado.');</script>";
	echo "<script>document.location = 'cadastro.php';</script>";
	return;

}

if (strlen($senha) <= 5 || strlen($senha) > 16){
	mysqli_close($conn);
	echo "<script>alert('Senha pequena ou grande demais.');</script>";
	echo "<script>document.location = 'cadastro.php';</script>";
	return;
}
if ($senha2 != $senha){
   mysqli_close($conn);
   echo "<script>alert('Senhas diferentes. Por favor, verifique novamente.');</script>";
   echo "<script>document.location = 'cadastro.php';</script>";
   return;
}

mysqli_query($conn, $sql);
mysqli_close($conn);
echo "<script>alert('Cadastro feito com sucesso!');</script>";
echo "<script>document.location = 'index.php';</script>";


?>