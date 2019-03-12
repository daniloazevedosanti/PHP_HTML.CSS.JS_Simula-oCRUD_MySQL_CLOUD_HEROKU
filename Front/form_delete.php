<?php
include "../Data/connect.php";

$id= $_POST['id'];

$sql = mysqli_query($link, "select * from tb_login WHERE id_login = '$id'");

$teste = mysqli_fetch_array($sql);
	$id3=$teste['id_login'];
	$nome=$teste['nome'];
	$email=$teste['email'];
	$senha=$teste['senha'];

?>

<html>
	<head>
		<title> ATUALIZANDO OS DADOS NO PHP</title>
	</head>
	<body>
			<div align="center"><h3>Deletando Registro</h3></div>
			<br />
		<form action="../Operacoes/delete.php" method="POST">
				<hr />
				ID: 
				<!--<Label type="number" nome= "id" value="<?php echo $id; ?>"><?php echo $id; ?></label>-->
				<br />
				<input type="number" name="id" value="<?php echo $id; ?>" readonly>	
				<hr />
				NOME:
				<br />	
				<input type="text" name="nome" value="<?php echo $nome; ?>" readonly>
				<hr />
				EMAIL:
				<br />
				<input type="email" name="email" value="<?php echo $email; ?>" readonly>
				<hr />
				SENHA:
				<br />
				<input type="text" name="senha" value="<?php echo $senha; ?>" readonly>
				<hr />
				<br />
				<input type="submit" value="Deletar">
				<input type="button" value="Voltar" onClick="history.go(-1)">
				<hr />				
		</form>
	</body>	
</html>