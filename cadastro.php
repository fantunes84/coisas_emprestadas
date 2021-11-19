<?php require_once "templates/navbar.php"; ?>

<main class="container">
    <div class="box box-primary">
        <div class="box-header">
            <h5 class="box-title">Cadastro de Usuários</h5>
        </div>
        <div class="box-body">
            <form action="src/validacoes/cadastrar_usuario.php" method="post">
                <label for="nome"><h6>Nome Completo</h6></label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
                
                <label for="contato"><h6>Contato</h6></label>
                <input type="text" class="form-control" name="contato" placeholder="Digite o seu telefone">
                
                <label for="email"><h6>E-mail</h6></label>
                <input type="mail" class="form-control" name="email" placeholder="Digite o seu e-mail">
                
                <label for="senha"><h6>Senha</h6></label>
                <input type="password" class="form-control" name="senha" placeholder="Digite uma senha">
                
                <label for="confirmacao_senha"><h6>Confirmação Senha</h6></label>
                <input type="password" class="form-control" name="confirmacao_senha" placeholder="Confirme a senha">
                <br><br>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </form>
        </div>
    </div>
</main>

<?php require_once "templates/footer.php"; ?>