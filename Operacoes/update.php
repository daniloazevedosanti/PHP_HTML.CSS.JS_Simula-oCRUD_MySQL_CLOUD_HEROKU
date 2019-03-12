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

mysqli_query($link, "update tb_login set email = '$email', senha = '$senha', nome = '$nome' WHERE id_login = '$id'");
echo "Atualizado com Sucesso! <br>";

//header('location:../Front/form_pesID.php');

?>
<html>
<head></head>
<body>
<br>
<input type="button" value="Nova Pesquisa" onClick="history.go(-2)">
</body>
</html>