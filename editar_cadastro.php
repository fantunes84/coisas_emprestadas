<?php 
require_once "templates/navbar.php";
require_once "src/config.php";
require_once "src/queries/usuario_query.php";
session_start();
include("src/validacoes/verificar_login.php");
$usuario = listar_usuario_id($conexao, $_SESSION['usuario_id']);
?>

<main class="container">
    <div class="box box-primary">
        <div class="box-header">
            <h5 class="box-title">Editar cadastro de <?php echo $usuario['nome']; ?></h5>
        </div>
        <div class="box-body">
            <form action="src/validacoes/cadastrar_usuario.php" method="post">
                <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

                <label for="nome"><h6>Nome Completo</h6></label>
                <input type="text" class="form-control" name="nome" required maxlength="80" value="<?php echo $usuario['nome']; ?>">
                
                <label for="email"><h6>E-mail</h6></label>
                <input type="email" class="form-control" name="email" required maxlength="60" value="<?php echo $usuario['email']; ?>">
                <br><br>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </form>
        </div>
    </div>
</main>

<?php require_once "templates/footer.php"; ?>