# Testando sistema de login com PHP


# O que é?
É apenas uma aplicação que faz uso de sessões com uso de HTML, CSS, um pouquinho de JavaScript, PHP e MySQL. O usuário faz o cadastro e se conecta na aplicação, podendo depois fazer logout.

OBS: Não inclui proteção contra SQL injection por ser um teste inicial na faculdade (feito em 2019).

É recomendável baixar o XAMPP que já tem Apache e MySQL, e então rodar o projeto.
Altere as informações de acordo com o necessário dentro do arquivo conexao.php

```php
<?php 

$hostname = "localhost"; //localhost é o padrão se rodar o projeto em rede local
$username = "root"; //usuário, root é o padrão para localhost
$password = ""; //senha se necessário
$db = "pizzaria"; //nome do banco de dados
$conn;

try{
$conn = mysqli_connect($hostname,$username,$password,$db);
}catch(Exception $e){
	echo "Falha ao se conectar.";
	return;
}
?>
```
