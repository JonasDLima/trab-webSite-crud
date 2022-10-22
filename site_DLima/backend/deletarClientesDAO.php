<?php 
session_start();

require_once 'backend/db_connection.php';

if(isset($_POST['btn-deletar'])):
    $id=mysqli_escape_string($connect, $_POST['id']);

    $sql="DELETE FROM clientes WHERE idCliente='id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Excluido com Sucesso!";
        header('Location: ../consultaClientes.php');
    endif;
endif;

?>