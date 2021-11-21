<?php
	require_once "src/queries/emprestimo_query.php";
	include("src/validacoes/verificar_login.php");
?>

<?php require_once "templates/navbar.php" ?>
    <main class="container">
		<div class="box box-primary">
		<div class="box-header">
			<h5 class="box-title">Cadastro de Empréstimos</h5>
		</div>
		<div class="box-body">
			<form action="src/validacoes/validar_emprestimo.php" method="post">
				<label for="item"><h6>Ítem</h6></label>
				<input type="text" class="form-control" name="item" required>
				
				<label for="emprestimo"><h6>Data de Empréstimo</h6></label>
				<input type="date" class="form-control" name="data_emprestimo" required>
				
				<label for="previsao_entrega"><h6>Previsão de Entrega</h6></label>
				<input type="date" class="form-control" name="previsao_entrega" required>
				
				<label for="nome"><h6>Nome da pesessoa que está emprestando</h6></label>
				<input type="text" class="form-control" name="nome" required>
				
				<label for="contato"><h6>Telefone de Contato</h6></label>
				<input type="text" class="form-control" name="contato" required>
				<br><br>
				<input type="submit" class="btn btn-primary" value="Cadastrar">
			</form>
		</div>
    </main>
<?php require_once "templates/footer.php" ?>