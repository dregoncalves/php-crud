<h1>Cadastro de Usuário</h1>
<form action="?page=salvar" method="POST">
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