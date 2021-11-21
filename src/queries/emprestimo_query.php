<?php


function cadastrar_emprestimo($conexao)
{
    $query = "insert into emprestimo (
                                    item, 
                                    data_emprestimo,
                                    previsao_entrega,
                                    nome,
                                    contato,
                                    usuario_id
                                )
                                values(
                                    '{$_POST['item']}',
                                    '{$_POST['data_emprestimo']}',
                                    '{$_POST['previsao_entrega']}',
                                    '{$_POST['nome']}',
                                    '{$_POST['contato']}',
                                    '{$_SESSION['usuario_id']}'
                                )";
    $conexao->query($query);
}

function editar_emprestimo($conexao)
{
    if (!$_POST['data_entrega']) {
        $data_entrega = 'null';
    } else {
        $data_entrega = "'{$_POST['data_entrega']}'";
    }
    $query = "update emprestimo set
                    item='{$_POST['item']}',
                    data_emprestimo='{$_POST['data_emprestimo']}',
                    data_entrega={$data_entrega},
                    previsao_entrega='{$_POST['previsao_entrega']}',
                    nome='{$_POST['nome']}',
                    contato='{$_POST['contato']}'
              where id={$_POST['id']}";
    $conexao->query($query);
}


function devolver($conexao, $id)
{
    $hoje = date("Y-m-d");
    $query = "update emprestimo set data_entrega='{$hoje}' where id={$id}";
    $conexao->query($query);
}


function listar_emprestimos($conexao)
{
    $query = 'select * from emprestimo';
    $resultado = $conexao->query($query);
    return $resultado->fetch_all(MYSQLI_ASSOC);
}
    

function listar_emprestimos_usuario($conexao, $usuario_id)
{
    $query = "select * from emprestimo where usuario_id={$usuario_id}";
    $resultado = $conexao->query($query);
    return $resultado->fetch_all(MYSQLI_ASSOC);
}


function listar_emprestimo_id($conexao, $emprestimo_id)
{
    $query = "select * from emprestimo where id={$emprestimo_id}";
    $resultado = $conexao->query($query);
    return $resultado->fetch_assoc();
}