<?php
session_start();

require_once 'db_connection.php';

if(isset($_POST['btn-editar-cliente'])):
    $nome=mysqli_escape_string($connect,$_POST['nome']);
    $telefone=mysqli_escape_string($connect,$_POST['telefone']);
    $endereco=mysqli_escape_string($connect,$_POST['endereco']);
    $id=mysqli_escape_string($connect,$_POST['idCliente']);

    $sql="UPDATE clientes SET nome='$nome', telefone='$telefone', endereco='$endereco' WHERE idCliente='$id'";
    echo $sql;
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../consultaClientes.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('Location: ../consultaClientes.php');
    endif;
endif;
?>