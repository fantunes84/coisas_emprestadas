<?php 
	require_once "src/classes/Emprestimo.php";
	require_once "src/config.php";
	require_once "src/queries/emprestimo_query.php";
	include("src/validacoes/verificar_login.php");
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
						<th class="text-center">Ítem</th>
						<th class="text-center">Data Empréstimo</th>
						<th class="text-center">Previsão Entrega</th>
						<th class="text-center">Data Entrega</th>
						<th class="text-center">Nome</th>
						<th class="text-center">Contato</th>
						<th class="text-center">Status</th>
						<th class="text-center">Ações</th>
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
															$i["contato"],
															$i["usuario_id"]
														);
							echo "
									<tr>
										<td>{$emprestimo->getItem()}</td>
										<td>{$emprestimo->imprimirDataEmprestimo()}</td>
										<td>{$emprestimo->imprimirPrevisaoEntrega()}</td>
										<td>{$emprestimo->imprimirDataEntrega()}</td>
										<td>{$emprestimo->getNome()}</td>
										<td>{$emprestimo->getContato()}</td>
										<td>{$emprestimo->getStatus()}</td>
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