<?php 
	require_once "src/classes/Item.php";
	require_once "util/config.php";
	require_once "queries/item_query.php";
	include("util/verificar_login.php");
?>

<?php require_once "templates/navbar.php"; ?>
	<main class="container">
		<div class="box box-primary">
		<div class="box-header">
			<h5 class="box-title">Ítens emprestados</h5>
		</div>
		<div class="box-body">
			<table class="tabela">
				<thead>
					<tr>
						<th>Ítem</th>
						<th>Data Empréstimo</th>
						<th>Previsão Entrega</th>
						<th>Data Entrega</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
                    <?php 
						$itens = listar_itens($conexao);
						$contador = 0;
                        foreach ($itens as $i)
						{
							$item = new Item(
												$i["item"], 
												$i["data_emprestimo"], 
												$i["previsao_entrega"],
												$i["data_entrega"]
											);
							echo "
									<tr>
										<td>{$item->getItem()}</td>
										<td>{$item->imprimirDataEmprestimo()}</td>
										<td>{$item->imprimirPrevisaoEntrega()}</td>
										<td>{$item->imprimirDataEntrega()}</td>
										<td>{$item->getStatus()}</td>
									</tr>
							";
							$contador++;
						}
                    ?>
				</tbody>
			</table>
		</div>
		<div class="box-footer">
            <?php
            echo "<p class='text-right'>Total de $contador itens listados.</p>";
            ?>
		</div>
    </main>

<?php require_once "templates/footer.php" ?>