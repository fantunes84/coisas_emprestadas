<?php

require_once "../config.php";
require_once "../queries/usuario_query.php";

function verificar_senha()
{
    if ($_POST['senha'] === $_POST['confirmacao_senha']) {
        $_POST['senha'] = md5($_POST['senha']);

    } else {
        echo "A senha não confere com a confirmação.";
    }
}

verificar_senha();

cadastrar_usuario($conexao);
header("Location: ../../login.php");

/*
Caso você precise fazer uma verificação de senhas, por exemplo, 
deverá usar este código:

if(crypt($senhadigitada,$senhaguardada)) == $senhaguardada) {
    echo "Login efetuado com sucesso";
}
*/