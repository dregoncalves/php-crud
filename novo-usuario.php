<h1>Cadastro de Usuário</h1>
<form method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Seu nome completo">
    </div>
    <div class="mb-3">
        <label>Endereço de email</label>
        <input type="email" name="email" class="form-control" placeholder="Seu email">
        <small class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
    </div>
    <div class="mb-3">
        <label">Telefone</label>
            <input type="tel" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" class="form-control" placeholder="Rua dos Bobos, nº 0">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php 
    if (@$_POST['acao'] && @$_POST['acao'] == "cadastrar") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
    }

    $query = "INSERT INTO dono (nome, email, telefone, endereco) VALUES ('{$nome}', '{$email}', '{$telefone}', '{$endereco}')";

    $result = $con->query($query);
?>