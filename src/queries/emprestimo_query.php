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