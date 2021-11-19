<?php

$servername = "localhost";
$username = 'fernando';
$password = '1234';
$dbname = 'itens_emprestados';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error){
    die("Falha de conexão: " . $conexao->connect_error);
}

#$select = 'select * from item';

#$resultado = $conexao->query($select);

#$itens = $resultado->fetch_all(MYSQLI_ASSOC);