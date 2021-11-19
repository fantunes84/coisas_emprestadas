<?php

require_once "../config.php";
require_once "../queries/item_query.php";

cadastrar_item($conexao);

header('Location: ../../index.php');