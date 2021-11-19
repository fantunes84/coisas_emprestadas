<?php

function listar_itens($conexao)
{
    $query = 'select * from item';
    $resultado = $conexao->query($query);
    $itens = $resultado->fetch_all(MYSQLI_ASSOC);
    return $itens;
}

function teste()
{
    echo "Funcao teste";
}