<?php 
	require_once "src/classes/Emprestimo.php";
	require_once "src/config.php";
	require_once "src/queries/emprestimo_query.php";
	include("src/validacoes/verificar_login.php");
    $id = $_GET["id"];
    $emprestimo = listar_emprestimo_id($conexao, $id);
?>

<?php require_once "templates/navbar.php"; ?>
	<main class="container">
		<div class="box box-primary">
		<div class="box-header">
			<h5 class="box-title">Empréstimo</h5>
		</div>
		<div class="box-body">
                  <form action="src/validacoes/validar_emprestimo.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $emprestimo['id']; ?>">

                        <label for="item">Item</label>
                        <input class="form-control" type="text" name="item" value="<?php echo $emprestimo['item']; ?>" required malengthx="100">
                        
                        <label for="data_emprestimo">Data de empréstimo</label>
                        <input class="form-control" type="date" name="data_emprestimo" value="<?php echo $emprestimo['data_emprestimo']; ?>" required>
                        
                        <label for="previsao_entrega">Previsão de entrega</label>
                        <input class="form-control" type="date" name="previsao_entrega" value="<?php echo $emprestimo['previsao_entrega']; ?>" required>
                        
                        <label for="data_entrega">Data de entrega</label>
                        <input class="form-control" type="date" name="data_entrega" value="<?php echo $emprestimo['data_entrega']; ?>">
                        
                        <label for="item">Nome da pessoa que emprestou</label>
                        <input class="form-control" type="text" name="nome" value="<?php echo $emprestimo['nome']; ?>" required maxlength="100">
                        
                        <label for="contato">Contato</label>
                        <input class="form-control" type="text" name="contato" value="<?php echo $emprestimo['contato']; ?>" required maxlength="20">

				<br><br>
				<input type="submit" class="btn btn-primary" value="Cadastrar">
                  </form>
                  
		</div>
		<div class="box-footer">
            <?php
            echo "<p class='text-right'>Total de $contador itens listados.</p>";
            ?>
		</div>
    </main>

<?php require_once "templates/footer.php" ?>