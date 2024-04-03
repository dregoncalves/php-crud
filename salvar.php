<?php
if(isset($_REQUEST['acao'])) {
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];

            $query = "INSERT INTO dono (nome, email, telefone, endereco) VALUES ('{$nome}', '{$email}', '{$telefone}', '{$endereco}')";

            $result = $con->query($query);

            if ($result) {
                echo "<script>alert('Cadastro concluído!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Erro no cadastro!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];

            $query = "UPDATE dono SET nome='{$nome}', email='{$email}', telefone='{$telefone}', endereco='{$endereco}' WHERE id =" . $_REQUEST['id'];

            $result = $con->query($query);

            if ($result) {
                echo "<script>alert('Editado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Erro ao editar !');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':
            $query = "DELETE FROM dono WHERE id=".$_REQUEST['id'];

            $result = $con->query($query);

            if ($result) {
                echo "<script>alert('Excluido com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Erro ao excluir!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
    }
}
