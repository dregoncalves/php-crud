<h1>Cadastro de Pet</h1>
<form action="?page=salvar" method="POST">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Nome do seu pet">
    </div>
    <div class="mb-3 dp-inline">
        <label>Especie</label>
        <input type="text" name="especie" class="form-control">
    </div>
    <div class="mb-3">
        <label">Idade</label>
        <input type="text" name="idade" class="form-control">
    </div>
    <div class="mb-3">
        <label>Peso</label>
        <input type="number" name="peso" class="form-control" placeholder="Peso em KG">
    </div>
    <div class="mb-3">
        <label>CPF do Dono</label>
        <input type="number" name="peso" class="form-control" placeholder="Seu CPF">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>