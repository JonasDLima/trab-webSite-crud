<?php
    require_once 'db_connection.php';

    if (isset($_POST['btn-cliente'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $nomeCompleto = $nome. " ".$sobrenome;
        $telefone = mysqli_escape_string($connect, $_POST['telefone']);
        $endereco = mysqli_escape_string($connect, $_POST['endereco']);
        $isReceberNovidade = mysqli_escape_string($connect, $_POST['isReceberNovidade']);

        $sql = "INSERT INTO clientes (nome, endereco, telefone, isRecebNotificacao) VALUES ('$nomeCompleto',  '$endereco','$telefone', '$isRecebeNovidades')";

        if (mysqli_query($connect, $sql)):
            header('Location: consultaClientes.php?sucesso');
        else:
            header('Location: consultaClientes.php?erro');
        endif;
    endif;
