<?php
include 'config.php';
?>

<h1 class="mt-3">Cadastrar Venda</h1>

<form action="salvar-venda.php" method="POST" class="mt-4">

    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label class="form-label">Cliente:</label>
        <select name="cliente_id_cliente" class="form-select" required>
            <option value="">- selecione -</option>
            <?php
            $sql = "SELECT id_cliente, nome_cliente FROM cliente ORDER BY nome_cliente ASC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($cliente = $result->fetch_object()) {
                    echo "<option value='{$cliente->id_cliente}'>{$cliente->nome_cliente}</option>";
                }
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Funcionário:</label>
        <select name="funcionario_id_funcionario" class="form-select" required>
            <option value="">- selecione -</option>
            <?php
            $sql = "SELECT id_funcionario, nome_funcionario FROM funcionario ORDER BY nome_funcionario ASC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($func = $result->fetch_object()) {
                    echo "<option value='{$func->id_funcionario}'>{$func->nome_funcionario}</option>";
                }
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Marca:</label>
        <select name="id_marca" class="form-select" required>
            <option value="">- selecione -</option>
            <?php
            $sql = "SELECT id_marca, nome_marca FROM marca ORDER BY nome_marca ASC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($marca = $result->fetch_object()) {
                    echo "<option value='{$marca->id_marca}'>{$marca->nome_marca}</option>";
                }
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Modelo:</label>
        <select name="modelo_id_modelo" class="form-select" required>
            <option value="">- selecione -</option>
            <?php
            $sql = "SELECT id_modelo, nome_modelo FROM modelo ORDER BY nome_modelo ASC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($modelo = $result->fetch_object()) {
                    echo "<option value='{$modelo->id_modelo}'>{$modelo->nome_modelo}</option>";
                }
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Data da Venda:</label>
        <input type="date" name="data_venda" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Valor da Venda:</label>
        <input type="number" name="valor_venda" step="0.01" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>
