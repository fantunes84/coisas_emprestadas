<?php

$conexao = new mysqli('127.0.0.1', 'fernando', '1234', 'itens_emprestados');

$select = 'select * from item';

$resultado = $conexao->query($select);

$itens = $resultado->fetch_all(MYSQLI_ASSOC);