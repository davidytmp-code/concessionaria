<h1>Listar Clientes</h1>

<?php
include("config.php");

$sql = "SELECT * FROM cliente";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>CPF</th>";
    print "<th>Telefone</th>";
    print "<th>Email</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id_cliente."</td>";
        print "<td>".$row->nome_cliente."</td>";
        print "<td>".$row->cpf_cliente."</td>";
        print "<td>".$row->fone_cliente."</td>";
        print "<td>".$row->email_cliente."</td>";

        print "<td>
                    <a href='?page=editar-cliente.php&id_cliente=".$row->id_cliente."' class='btn btn-success'>Editar</a>
                    <a href='?page=salvar-cliente.php&acao=excluir&id_cliente=".$row->id_cliente."' class='btn btn-danger'>Excluir</a>
               </td>";

        print "</tr>";
    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>
