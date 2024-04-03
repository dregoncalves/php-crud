<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 1400px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Listar Usuários</h1>
        <?php
        $query = "SELECT * FROM dono";
        $result = $con->query($query);
        $qtd = $result->num_rows;

        if ($qtd > 0) {
        ?>
            <table class="table table-hover table-striped">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
                <?php
                while ($row = $result->fetch_object()) {
                ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->nome; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->endereco; ?></td>
                        <td>
                            <button onclick="location.href='?page=editar&id=<?php echo $row->id; ?>';" class="btn btn-primary btn-sm mx-3">Editar</button>
                            <button onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=<?php echo $row->id?>';}else{false;}" class="btn btn-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        <?php
        } else {
            echo "<p class='alert alert-danger'>Sem resultados!</p>";
        }
        ?>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>