<?php

$servername = "localhost";
$username = 'fernando';
$password = '1234';
$dbname = 'emprestimos';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error){
    die("Falha de conexão: " . $conexao->connect_error);
}
