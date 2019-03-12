<html>
	<head>
		<title> INSERINDO DADOS NUMA CRUD PHP</title>
	</head>
	<body>
			<div align="center"><h3>Cadastro de Dados</h3></div>
			<br />
		<form action="insert.php" method="POST">
				<hr />
				NOME:
				<br />	
				<input type="text" name="nome" placeholder="Digite seu Nome!">
				<hr />
				E-mail:
				<br />	
				<input type="email" name="email" placeholder="Digite seu e-mail!">
				<hr />
				SENHA:
				<br />	
				<input type="password" name="senha" placeholder="Digite sua Senha!">

				<br />
				<input type="submit" value="Cadastrar">
		</form>
	</body>	
</html>