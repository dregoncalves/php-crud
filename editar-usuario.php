<h1>Editar Usuário</h1>

<?php
$query = "SELECT * FROM dono WHERE id =" . $_REQUEST['id'];

$result = $con->query($query);
$row = $result->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $row->nome; ?>" class="form-control" placeholder="Seu nome completo">
    </div>
    <div class="mb-3">
        <label>Endereço de email</label>
        <input type="email" name="email" value="<?php echo $row->email; ?>" class="form-control" placeholder="Seu email">
        <small class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
    </div>
    <div class="mb-3">
        <label">Telefone</label>
            <input type="tel" name="telefone" value="<?php echo $row->telefone; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" value="<?php echo $row->endereco; ?>" class="form-control" placeholder="Rua dos Bobos, nº 0">
    </div>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>