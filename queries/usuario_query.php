<?php



function cadastrar_usuario($conexao)
{
    $insert = "insert into usuario (
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
    $conexao->query($insert);
}

