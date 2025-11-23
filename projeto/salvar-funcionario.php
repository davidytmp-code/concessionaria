<?php
include("config.php");

switch ($_REQUEST['acao']) {

    case 'cadastrar':
        $sql = "INSERT INTO funcionario (
                    nome_funcionario,
                    email_funcionario,
                    fone_funcionario,
                    cpf_funcionario
                ) VALUES (
                    '".$_POST['nome_funcionario']."',
                    '".$_POST['email_funcionario']."',
                    '".$_POST['fone_funcionario']."',
                    '".$_POST['cpf_funcionario']."'
                )";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-funcionario.php';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar! Erro: ".$conn->error."');</script>";
            print "<script>location.href='?page=listar-funcionario.php';</script>";
        }
        break;



    case 'editar':
        $sql = "UPDATE funcionario SET
                    nome_funcionario='".$_POST['nome_funcionario']."',
                    email_funcionario='".$_POST['email_funcionario']."',
                    fone_funcionario='".$_POST['fone_funcionario']."',
                    cpf_funcionario='".$_POST['cpf_funcionario']."'
                WHERE id_funcionario=".$_POST["id_funcionario"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar-funcionario.php';</script>";
        } else {
            print "<script>alert('Não foi possível editar!');</script>";
            print "<script>location.href='?page=listar-funcionario.php';</script>";
        }
        break;



    case 'excluir':

        $id = $_REQUEST['id_funcionario'];

        // Exclui vendas relacionadas
        $sql_vendas = "DELETE FROM venda WHERE funcionario_id_funcionario = $id";
        $conn->query($sql_vendas);

        // Exclui funcionário
        $sql_func = "DELETE FROM funcionario WHERE id_funcionario = $id";
        $res_func = $conn->query($sql_func);

        if ($res_func == true) {
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-funcionario.php';</script>";
        } else {
            print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=listar-funcionario.php';</script>";
        }
        break;
}
?>
