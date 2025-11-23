<h1>Listar Funcionários</h1>

<?php
include_once("config.php");

$sql = "SELECT * FROM funcionario";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    print "<table class='table table-bordered table-striped'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Telefone</th>";
    print "<th>CPF</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id_funcionario."</td>";
        print "<td>".$row->nome_funcionario."</td>";
        print "<td>".$row->email_funcionario."</td>";
        print "<td>".$row->fone_funcionario."</td>";
        print "<td>".$row->cpf_funcionario."</td>";
        print "<td>
                <a href='?page=editar-funcionario.php&id_funcionario=".$row->id_funcionario."' class='btn btn-warning btn-sm'>Editar</a>

                <a href='?page=salvar-funcionario.php&acao=excluir&id_funcionario=".$row->id_funcionario."' class='btn btn-danger btn-sm' onclick=\"return confirm('Tem certeza que deseja excluir?');\">Excluir</a>
               </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<p>Não há funcionários cadastrados</p>";
}
