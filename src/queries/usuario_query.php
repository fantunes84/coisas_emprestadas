<?php


function cadastrar_usuario($conexao)
{
    $query = "insert into usuario (
                                    nome,
                                    email,
                                    senha
                                )
                                values(
                                    '{$_POST['nome']}',
                                    '{$_POST['email']}',
                                    '{$_POST['senha']}'
                                )";
    $conexao->query($query);
}


function alterar_senha($conexao)
{
    $query = "update usuario set senha='{$_POST['senha']}' where id={$_POST['id']}";
    $conexao->query($query);
}


function editar_usuario($conexao)
{
    $query = "update usuario set 
                                nome='{$_POST['nome']}',
                                email='{$_POST['email']}'
              where id={$_POST['id']}";
    $conexao->query($query);
}


function listar_usuario_id($conexao, $id)
{
    $query = "select * from usuario where id={$id}";
    $resultado = $conexao->query($query);
    $usuario = $resultado->fetch_assoc();
    return $usuario;
}


function listar_usuario_email($conexao, $email)
{
    $query = "select * from usuario where email='{$email}'";
    $resultado = $conexao->query($query);
    return $resultado->fetch_assoc();
}