<?php

$conexao = new mysqli('127.0.0.1', 'fernando', '1234', 'itens_emprestados');

$criar_tabela = 'create table item (id int primary key auto_increment, item varchar(50), data_emprestimo date, previsao_entrega date, data_entrega date)';

$insert = "insert into item (
                                item, 
                                data_emprestimo,
                                previsao_entrega
                            )
                            values(
                                '{$_POST['item']}',
                                '{$_POST['data_emprestimo']}',
                                '{$_POST['previsao_entrega']}'
                            )";

$conexao->query($insert);

header('Location:../index.php');

/*
require_once "../src/classes/Item.php";

$item = new Item(
    $_POST["item"],
    $_POST["data_emprestimo"],
    $_POST["previsao_entrega"],
    $_POST["data_entrega"],
    $_POST["status"]
);

echo "Item: {$item->getItem()}<br>
      Empréstimo: {$item->getDataEmprestimo()}<br>
      Previsão de Entrega: {$item->getPrevisaoEntrega()}<br>
      Entrega: {$item->getDataEntrega()}<br>
      Status: {$item->getStatus()}<br><br>";

$insert = "insert into item (
                            item, 
                            data_emprestimo,
                            previsao_entrega
                        )
                        values(
                            '{$item->getItem()}',
                            '{$item->getDataEmprestimo()}',
                            '{$item->getPrevisaoEntrega()}'
                        )";
*/
