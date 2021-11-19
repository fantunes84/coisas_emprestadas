<?php 
require_once "util/config.php";
require_once "queries/item_query.php";
session_start();
include("util/verificar_login.php");
$itens = listar_itens($conexao);
var_dump($itens);
?>