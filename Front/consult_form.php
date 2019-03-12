<?php
include "../Data/connect.php";

$consulta = $_POST['consulta'];

$sql = mysqli_query($link, "select * from tb_login WHERE nome LIKE '%$consulta%'");

while($vetor = mysqli_fetch_array($sql)){
	$id = $vetor['id_login'];
	$nome = $vetor['nome'];
	$email = $vetor['email'];
	$senha = $vetor['senha'];

	//echo "Id: $id <br>";
	echo "Nome: $nome <br>";
	//echo "Email: $email <br>";
	//echo "Senha: $senha <hr>";

}

?>