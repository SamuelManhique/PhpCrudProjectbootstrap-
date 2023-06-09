<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap-grid.css" rel="stylesheet">

    <title>Cadastro</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Editar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include('conexao.php');
                switch (@$_REQUEST['page']) {
                    case 'novo':
                        include('novoUsuario.php');
                        break;
                    case 'listar':
                        include('lista.php');
                        break;
                    case 'salvar':
                        include('salvar.php');
                        break;
                    case 'editar':
                        include('editar.php');
                        break;
                    default:
                        echo ("OLa MUNDO!!");
                }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>