<h1>Listar Vendas</h1>

<?php
include_once("config.php");

$sql = "SELECT v.*, c.nome_cliente, m.nome_modelo, f.nome_funcionario
        FROM venda v
        INNER JOIN cliente c ON v.cliente_id_cliente = c.id_cliente
        INNER JOIN modelo m ON v.modelo_id_modelo = m.id_modelo
        INNER JOIN funcionario f ON v.funcionario_id_funcionario = f.id_funcionario";

$res = $conn->query($sql);

if(!$res){
    die("<p class='alert alert-danger'>Erro na consulta SQL: " . $conn->error . "</p>");
}

$qtd = $res->num_rows;

if ($qtd > 0){
    print "<table class='table table-bordered table-striped'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Data</th>";
    print "<th>Valor</th>";
    print "<th>Cliente</th>";
    print "<th>Modelo</th>";
    print "<th>Funcionário</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_venda."</td>";
        print "<td>".$row->data_venda."</td>";
        print "<td>R$ ".number_format($row->valor_venda, 2, ',', '.')."</td>";
        print "<td>".$row->nome_cliente."</td>";
        print "<td>".$row->nome_modelo."</td>";
        print "<td>".$row->nome_funcionario."</td>";

        print "<td>
                <button onclick=\"location.href='?page=editar-venda.php&id_venda=".$row->id_venda."';\" 
                        class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('Deseja excluir esta venda?')){ 
                        location.href='?page=salvar-venda.php&acao=excluir&id_venda=".$row->id_venda."'; 
                    }\" 
                    class='btn btn-danger'>Excluir</button>
               </td>";
        print "</tr>";
    }

    print "</table>";
}else{
    print "<p class='alert alert-warning'>Nenhuma venda encontrada.</p>";
}
?>
