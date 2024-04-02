<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-5 rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img\galo.png" alt="Bootstrap" width="60" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novoPet">Novo Pet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novoUsuario">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listarPets">Listar Pets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listarUsuarios">Listar Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>                
    <!-- includes -->
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include('config.php');
                switch (@$_REQUEST['page']) {
                    case 'novoPet':
                        include('novo-pet.php');
                        break;
                    case 'listarPets':
                        include('listar-pets.php');
                        break;
                    case 'novoUsuario':
                        include('novo-usuario.php');
                        break;
                    case 'listarUsuarios':
                        include('listar-usuarios.php');
                        break;
                    default:
                        echo "<h1>Página Inicial</h1>";
                        break;
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>