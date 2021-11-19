<?php

function cadastrar_item($conexao)
{
    $query = "insert into item (
                                    item, 
                                    data_emprestimo,
                                    previsao_entrega
                                )
                                values(
                                    '{$_POST['item']}',
                                    '{$_POST['data_emprestimo']}',
                                    '{$_POST['previsao_entrega']}'
                                )";
    $conexao->query($query);
}


function listar_itens($conexao)
{
    $query = 'select * from item';
    $resultado = $conexao->query($query);
    $itens = $resultado->fetch_all(MYSQLI_ASSOC);
    return $itens;
}