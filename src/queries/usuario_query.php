<?php



function cadastrar_usuario($conexao)
{
    $query = "insert into usuario (
                                    nome, 
                                    contato,
                                    email,
                                    senha
                                )
                                values(
                                    '{$_POST['nome']}',
                                    '{$_POST['contato']}',
                                    '{$_POST['email']}',
                                    '{$_POST['senha']}'
                                )";
    $conexao->query($query);
}

function listar_usuario_email($conexao, $email)
{
    $query = "select * from usuario where email='{$email}'";
    #$query = "select * from usuario";
    $resultado = $conexao->query($query);
    $usuario = $resultado->fetch_assoc();
    return $usuario;
}