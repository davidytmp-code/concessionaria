<h1>Editar Cliente</h1>

<?php
include("config.php");

$sql = "SELECT * FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar-cliente.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_cliente" value="<?php print $row->id_cliente; ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_cliente" class="form-control" value="<?php print $row->nome_cliente; ?>" required>
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_cliente" class="form-control" value="<?php print $row->cpf_cliente; ?>" required>
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_cliente" class="form-control" value="<?php print $row->fone_cliente; ?>" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email_cliente" class="form-control" value="<?php print $row->email_cliente; ?>" required>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>
