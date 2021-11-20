<?php

require_once "../config.php";
require_once "../queries/emprestimo_query.php";

session_start();

cadastrar_emprestimo($conexao);

header('Location: ../../index.php');