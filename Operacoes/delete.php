<?php
include "../Data/connect.php";

$id= $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
	
	echo "Id: $id <br>";
	echo "Nome: $nome <br>";
	echo "Email: $email <br>";
	echo "Senha: $senha <hr>";

mysqli_query($link, "delete from tb_login WHERE id_login = '$id'");
echo "Registro apagado com Sucesso! <br>";
?>

<html>
	<head>
		<title> </title>
	</head>
	<body>
		<br>
		<input type="button" value="Voltar" onClick="history.go(-2)">
		<hr />	
	</body>	
</html>
