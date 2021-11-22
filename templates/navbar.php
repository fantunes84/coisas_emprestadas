<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="static/img/favicon.png">
    <link rel="stylesheet" href="static/css/style.css">
    
    <title>Projeto Coisas Emprestadas</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-red">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Empréstimos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"  href="emprestar.php">Emprestar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="index.php">Listar empréstimos</a>    
                        </li>

                        <li class="nav-item dropdown right">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo explode(" ", $_SESSION['usuario_nome'])[0]; ?> 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                    <a class="dropdown-item"  href="editar_cadastro.php?id=<?php echo $_SESSION['usuario_id']; ?>">Editar Cadastro</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="dropdown-item"  href="alterar_senha.php?id=<?php echo $_SESSION['usuario_id']; ?>">Alterar senha</a>
                                </li>

                                <li><hr class="dropdown-divider"></li>
                                
                                <li class="nav-item">
                                    <a class="dropdown-item"  href="src/validacoes/logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>