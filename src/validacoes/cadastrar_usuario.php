<?php

require_once "../config.php";
require_once "../queries/usuario_query.php";

$usuario_db = listar_usuario_email($conexao, $_POST['email']);

if ($_POST['senha'] === $_POST['confirmacao_senha']) {
    $_POST['senha'] = crypt($_POST['senha']);

    if (!$_POST['id']) {
        if (!$usuario_db) {
            cadastrar_usuario($conexao);
            header("Location: ../../login.php");
        } else {
            echo "O e-mail {$_POST['email']} já está cadastrado. Tente novamente.";
            header("refresh:3;url=../../cadastro.php");
        }
    } elseif ($_POST['id'] && $usuario_db){
        editar_usuario($conexao, $usuario_db);
        header("Location: ../../index.php");
    } else {
        alterar_senha($conexao);
        header("Location: ../../index.php");
        echo "Teste";
    }
} else {
    echo "A senha não confere com a confirmação.";
}
