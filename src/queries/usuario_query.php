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


function listar_usuario_email($conexao, $email)
{
    $query = "select * from usuario where email='{$email}'";
    $resultado = $conexao->query($query);
    return $resultado->fetch_assoc();
}