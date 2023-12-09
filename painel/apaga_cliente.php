<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
        exit; 
    }
    require('conecta.php');

    $id_cliente = $_GET['id'];

    $sql = "DELETE FROM cadastro WHERE id_cliente = '$id_cliente' ";
    $resultado = $conexao->query($sql);

    if ($resultado) {

        $_SESSION['mensagem_sucesso'] = "Cliente excluído com sucesso!";
    } else {

        $_SESSION['mensagem_erro'] = "Erro ao excluir o cliente.";
    }


    header('Location: index.php'); 
    exit; 
?>