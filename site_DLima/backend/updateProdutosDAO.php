<?php
session_start();

require_once 'db_connection.php';

if(isset($_POST['btn-editar-produto'])):
    $descricao=mysqli_escape_string($connect,$_POST['descricao']);
    $quantidade=mysqli_escape_string($connect,$_POST['quantidade']);
    $id=mysqli_escape_string($connect,$_POST['idProduto']);

    $sql="UPDATE produtos SET descProduto='$descricao', qtdEstoque='$quantidade' WHERE idProduto='$id'";
    echo $sql;
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../consultaProdutos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('Location: ../consultaProdutos.php');
    endif;
endif;
?>