<?php

session_start();

require_once "src/config.php";
require_once "src/queries/emprestimo_query.php";
require_once "src/classes/Emprestimo.php";

$emprestimos = listar_emprestimos($conexao, $_SESSION['usuario_id']);?>

<table class="tabela">
    <thead>
        <tr>
            <th>Ítem</th>
            <th>Data Empréstimo</th>
            <th>Previsão Entrega</th>
            <th>Data Entrega</th>
            <th>Nome</th>
            <th>Contato</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $emprestimos = listar_emprestimos_usuario($conexao, $_SESSION["usuario_id"]);
            $contador = 0;
            foreach ($emprestimos as $i)
            {
                $emprestimo = new Emprestimo(
                                                $i["item"], 
                                                $i["data_emprestimo"], 
                                                $i["previsao_entrega"],
                                                $i["data_entrega"],
                                                $i["nome"],
                                                $i["nome"],
                                                $i["usuario_id"]
                                            );
                echo "
                        <tr>
                            <td>{$emprestimo->getItem()}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                ";
                $contador++;
            }
        ?>
    </tbody>
    </table>
</table>