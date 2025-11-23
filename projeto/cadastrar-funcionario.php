<h1>Cadastrar Funcionário</h1>

<form action="?page=salvar-funcionario.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_funcionario" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email_funcionario" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_funcionario" class="form-control">
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_funcionario" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>
