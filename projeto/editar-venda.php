<?php

include 'config.php';

$sql = "SELECT * FROM venda WHERE id_venda=".$_REQUEST["id_venda"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<h1>Editar Venda</h1>

<form action="?page=salvar-venda.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php print $row->id_venda; ?>">

    <div class="mb-3">
        <label>Data da Venda</label>
        <input type="date" name="data_venda" value="<?php print $row->data_venda; ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Valor da Venda</label>
        <input type="number" step="0.01" name="valor_venda" value="<?php print $row->valor_venda; ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id_cliente" class="form-control" required>
            <?php
                $sql2 = "SELECT * FROM cliente ORDER BY nome_cliente";
                $res2 = $conn->query($sql2);

                while($c = $res2->fetch_object()){
                    $selected = ($c->id_cliente == $row->cliente_id_cliente) ? "selected" : "";
                    print "<option value='{$c->id_cliente}' $selected>{$c->nome_cliente}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Marca</label>
        <select name="id_marca" class="form-control" required>
            <?php
                // Busca as marcas disponíveis
                $sqlM = "SELECT * FROM marca ORDER BY nome_marca";
                $resM = $conn->query($sqlM);

                while($m = $resM->fetch_object()){
                    $selected = ($m->id_marca == $row->id_marca) ? "selected" : "";
                    print "<option value='{$m->id_marca}' $selected>{$m->nome_marca}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Modelo</label>
        <select name="modelo_id_modelo" class="form-control" required>
            <?php
                $sql3 = "SELECT * FROM modelo ORDER BY nome_modelo";
                $res3 = $conn->query($sql3);

                while($m = $res3->fetch_object()){
                    $selected = ($m->id_modelo == $row->modelo_id_modelo) ? "selected" : "";
                    print "<option value='{$m->id_modelo}' $selected>{$m->nome_modelo}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Funcionário</label>
        <select name="funcionario_id_funcionario" class="form-control" required>
            <?php
                $sql4 = "SELECT * FROM funcionario ORDER BY nome_funcionario";
                $res4 = $conn->query($sql4);

                while($f = $res4->fetch_object()){
                    $selected = ($f->id_funcionario == $row->funcionario_id_funcionario) ? "selected" : "";
                    print "<option value='{$f->id_funcionario}' $selected>{$f->nome_funcionario}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>
