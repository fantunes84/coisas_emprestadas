<?php

<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
		<link rel="icon" href="img/favicon.png">
		<link rel="stylesheet" href="css/styles.css">
		
		<title>Projeto Coisas Emprestadas</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-dark bg-red">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Projeto Coisas Emprestadas</a>
				<form class="d-flex">
					<input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
					<button class="btn" type="submit">Search</button>
				</form>
				</div>
			</nav>
		</header>
		<main class="container">
			<div class="box box-primary">
			<div class="box-header">
				<h5 class="box-title">Cadastro de Usuários</h5>
			</div>
			<div class="box-body">
				<form action="post">
					<label for="nome"><h6>Nome Completo</h6></label>
					<input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
					
					<label for="contato"><h6>Contato</h6></label>
					<input type="text" class="form-control" name="contato" placeholder="Digite o seu telefone">
					
					<label for="email"><h6>E-mail</h6></label>
					<input type="mail" class="form-control" name="email" placeholder="Digite o seu e-mail">
					
					<label for="senha"><h6>Senha</h6></label>
					<input type="password" class="form-control" name="senha" placeholder="Digite uma senha">
					
					<label for="confirmacao-senha"><h6>Confirmação Senha</h6></label>
					<input type="password" class="form-control" name="confirmacao-senha" placeholder="Confirme a senha">
					<br><br>
					<input type="submit" class="btn btn-primary" value="Cadastrar">
				</form>
			</div>
		</main>
		<footer class="bg-dark">
		<div class="text-center p-3" >
			© 2021 Copyright: Fernando Antunes
		</div>
		</footer>
	</body>
</html>

?>