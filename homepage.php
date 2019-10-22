<?php
session_start();
if(!isset($_SESSION['nome'])){
	echo "<script>alert('Faça o login primeiro');</script>";
	echo "<script>document.location = 'index.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title>Página Inicial</title>
<link rel="stylesheet" type="text/css" href="logando.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
    <div id="w">
    Olá, <?php echo "<span style='color: red; font-weight: bold; font-size: 25px;'>".$_SESSION['nome']."</span>"; ?><br><br>
    Seu login foi efetuado com sucesso!!!<br>
    Obrigado por testar esse trabalhinho :)<br><br>
    <button id="oi"><a id="cas" href="logout.php">Sair</a></button>
    </div>
	</body>
</html>