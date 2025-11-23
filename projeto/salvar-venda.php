<?php
include_once("config.php");

$acao = $_REQUEST["acao"] ?? '';

switch ($acao) {

    case 'cadastrar':
        if (isset($_POST["cliente_id_cliente"], $_POST["funcionario_id_funcionario"], $_POST["modelo_id_modelo"], $_POST["data_venda"], $_POST["valor_venda"])) {

            $sql = "INSERT INTO venda (cliente_id_cliente, funcionario_id_funcionario, modelo_id_modelo, data_venda, valor_venda)
                    VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param(
                "iiisd",
                $_POST["cliente_id_cliente"],
                $_POST["funcionario_id_funcionario"],
                $_POST["modelo_id_modelo"],
                $_POST["data_venda"],
                $_POST["valor_venda"]
            );

            if ($stmt->execute()) {
                echo "<script>alert('Venda cadastrada com sucesso!');</script>";
                echo "<script>location.href='index.php?page=listar-venda.php';</script>";
                exit;

            } else {
                echo "<script>alert('Erro ao cadastrar venda: ".$stmt->error."');</script>";
                exit;
            }

            $stmt->close();
        } else {
            echo "<script>alert('Por favor, preencha todos os campos!');</script>";
            exit;
        }
        break;

    case 'editar':
        if (isset($_POST["id_venda"], $_POST["cliente_id_cliente"], $_POST["funcionario_id_funcionario"], $_POST["modelo_id_modelo"], $_POST["data_venda"], $_POST["valor_venda"])) {

            $sql = "UPDATE venda SET cliente_id_cliente=?, funcionario_id_funcionario=?, modelo_id_modelo=?, data_venda=?, valor_venda=? WHERE id_venda=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param(
                "iiisdi",
                $_POST["cliente_id_cliente"],
                $_POST["funcionario_id_funcionario"],
                $_POST["modelo_id_modelo"],
                $_POST["data_venda"],
                $_POST["valor_venda"],
                $_POST["id_venda"]
            );

            if ($stmt->execute()) {
                echo "<script>alert('Venda editada com sucesso!');</script>";
                echo "<script>location.href='index.php?page=listar-venda.php';</script>";
                exit;

            } else {
                echo "<script>alert('Erro ao editar venda: ".$stmt->error."');</script>";
                exit;
            }

            $stmt->close();
        } else {
            echo "<script>alert('Por favor, preencha todos os campos!');</script>";
            exit;
        }
        break;

case 'excluir':

    if (isset($_REQUEST["id_venda"])) {

        $sql = "DELETE FROM venda WHERE id_venda=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_REQUEST["id_venda"]);

        if ($stmt->execute()) {
            echo "<script>alert('Venda excluída com sucesso!');</script>";
            echo "<script>location.href='index.php?page=listar-venda.php';</script>";
            exit;
        } else {
            echo "<script>alert('Erro ao excluir venda: ".$stmt->error."');</script>";
            exit;
        }

        $stmt->close();

    } else {
        echo "<script>alert('ID da venda não informado!');</script>";
        exit;
    }

break;

    default:
        echo "<script>alert('Ação inválida!');</script>";
        exit;
}

$conn->close();
?>
