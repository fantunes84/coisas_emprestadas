<?php

#phpinfo();

$conexao = new mysqli('127.0.0.1', 'fernando', '1234', 'treinaweb');

$criar_tabela = 'create table alunos (id int primary key, nome varchar(100))';

$insert = 'insert into alunos (id, nome) values(1, "João da Silva")';

$select = 'select * from alunos';

var_dump($conexao->query($select));