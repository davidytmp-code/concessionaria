<h1>Cadastrar Cliente</h1>

<form action="?page=salvar-cliente.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_cliente" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_cliente" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone_cliente" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email_cliente" class="form-control" required>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>
