<?php

require_once "../config.php";
require_once "../queries/usuario_query.php";

function verificar_senha()
{
    if ($_POST['senha'] === $_POST['confirmacao_senha']) {
        $_POST['senha'] = crypt($_POST['senha']);

    } else {
        echo "A senha não confere com a confirmação.";
    }
}

verificar_senha();

cadastrar_usuario($conexao);
header("Location: ../../login.php");