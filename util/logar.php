<?php

// Conexão com o banco de dados
require_once "../util/config.php";
require_once "../queries/usuario_query.php";

// Inicia sessões
session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if((isset($_POST['email'])) && (isset($_POST['senha']))){
	$usuario = listar_usuario_email($conexao, $email);
	if (isset($usuario)){
		if ($senha == $usuario['senha']) {
			$_SESSION['usuarioId'] = $usuario['id'];
            $_SESSION['usuarioNome'] = $usuario['nome'];
            $_SESSION['usuarioEmail'] = $usuario['email'];
			header("Location: ../index.php");
		} else {
			$_SESSION['loginErro'] = "A senha digitada não confere.";
			echo $_SESSION['loginErro'];
		}
	} else {
		$_SESSION['loginErro'] = "Usuário não encontrado.";
		echo $_SESSION['loginErro'];
	}

	
} else {
	$_SESSION['loginErro'] = "O e-mail ou a senha não foram digitados.";
	echo $_SESSION['loginErro'];
}
