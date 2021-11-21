<?php

session_start();

require_once "../config.php";
require_once "../queries/emprestimo_query.php";

devolver($conexao, $_GET['id']);

header('Location: ../../index.php');