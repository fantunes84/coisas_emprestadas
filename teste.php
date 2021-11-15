<?php 

require_once "classes/Item.php";
$item = new Item("X-Box", "30/11/2020", "03/12/2020", "-", "Emprestado (no prazo)");

echo $item->getNome();
echo $item->setNome("Teste");
echo $item->getNome();