<?php

require_once "../config.php";
require_once "../queries/emprestimo_query.php";

session_start();

if (!$_POST['id']){
    cadastrar_emprestimo($conexao);
} else {
    editar_emprestimo($conexao);
}

header('Location: ../../index.php');