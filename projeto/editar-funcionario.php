<h1>Editar Funcionário</h1>

<?php
include_once("config.php");

$sql = "SELECT * FROM funcionario WHERE id_funcionario=".$_REQUEST["id_funcionario"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar-funcionario.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_funcionario" value="<?php print $row->id_funcionario; ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_funcionario" class="form-control" value="<?php print $row->nome_funcionario; ?>" required>
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email_funcionario" class="form-control" value="<?php print $row->email_funcionario; ?>" required>
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_funcionario" class="form-control" value="<?php print $row->fone_funcionario; ?>">
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_funcionario" class="form-control" value="<?php print $row->cpf_funcionario; ?>">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>
