<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="static/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel="icon" href="static/img/favicon.png">
    </head>
    <body>
        <header class="main-header">
        </header>


        <main class="login">
            <img class="logotipo" src="static/img/logo.png">
            <div class="login-box">
                
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Login</h3>
                    </div>
                    <div class="box-body">
                        <form method="post" action="src/validacoes/validar_login.php">
                            <div class="form-group">
                                
                                <label>E-mail: </label>
                                <input type="text" name="email" autofocus autocapitalize="none" autocomplete="email" maxlength="150" class="form-control" required id="id_email">
                            </div>

                            <div class="form-group">
                                
                                <label>Senha: </label>
                                <input type="password" name="senha" autocomplete="current-password" class="form-control" required id="id_senha">
                            </div>
                    <div class="box-footer">
                        <div class="form-group">
                            <input type="submit" value="Logar" class="btn btn-primary">
                            <a href="cadastro.php">Cadastrar usuário</a>
                        </div>
                    </div>
                        </form>
                    </div>
                </div>

            </div>


            <script src="script.js"></script>

        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    </body>
</html>