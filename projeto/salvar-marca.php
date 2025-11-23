<?php
include("config.php");

   
   switch ($_REQUEST['acao']){
        case 'cadastrar':
            $sql = "INSERT INTO marca (nome_marca) VALUES ('".$_POST['nome_marca']."')";
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-marca.php';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=listar-marca.php';</script>";

            }
            break;
            
        case 'editar':
            $sql = "UPDATE marca SET nome_marca= '".$_POST['nome_marca']."'WHERE id_marca=".$_POST["id_marca"];
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-marca.php';</script>";
            }else{
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=listar-marca.php';</script>";

            }
            break;

        case 'excluir':
            $sql = "DELETE FROM marca WHERE id_marca=".$_REQUEST['id_marca'];
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-marca.php';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=listar-marca.php';</script>";

            }
            break;
    }