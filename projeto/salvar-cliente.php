<?php
include("config.php");

switch ($_REQUEST["acao"]) {

    case 'cadastrar':

        $sql = "INSERT INTO cliente (
                    nome_cliente,
                    cpf_cliente,
                    email_cliente,
                    dt_nasc_cliente,
                    fone_cliente,
                    endereco_cliente
                ) VALUES (
                    '" . $_POST["nome_cliente"] . "',
                    '" . $_POST["cpf_cliente"] . "',
                    '" . $_POST["email_cliente"] . "',
                    '" . $_POST["dt_nasc_cliente"] . "',
                    '" . $_POST["fone_cliente"] . "',
                    '" . $_POST["endereco_cliente"] . "'
                )";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cliente cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-cliente.php';</script>";
        } else {
            echo "Erro SQL ao cadastrar: " . $conn->error;
        }

        break;

    case 'editar':

        $sql = "UPDATE cliente SET
                    nome_cliente='" . $_POST["nome_cliente"] . "',
                    cpf_cliente='" . $_POST["cpf_cliente"] . "',
                    email_cliente='" . $_POST["email_cliente"] . "',
                    dt_nasc_cliente='" . $_POST["dt_nasc_cliente"] . "',
                    fone_cliente='" . $_POST["fone_cliente"] . "',
                    endereco_cliente='" . $_POST["endereco_cliente"] . "'
                WHERE id_cliente=" . $_POST["id_cliente"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cliente editado com sucesso!');</script>";
            print "<script>location.href='?page=listar-cliente.php';</script>";
        } else {
            echo "Erro SQL ao editar: " . $conn->error;
        }

        break;

    case 'excluir':

        $sql = "DELETE FROM cliente WHERE id_cliente=" . $_REQUEST["id_cliente"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cliente excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-cliente.php';</script>";
        } else {
            echo "Erro SQL ao excluir: " . $conn->error;
        }

        break;
}
?>
