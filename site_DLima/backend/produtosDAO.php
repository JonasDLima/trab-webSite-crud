<?php
    require_once 'db_connection.php';

    if (isset($_POST['btn-produto'])):
        // echo "database connect!";
	    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
        $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
    
        // echo $descricao;
        // echo $quantidade;
    

        $sql = "INSERT INTO produtos (descProduto, qtdEstoque) 
            VALUES ('$descricao',  '$quantidade')";

        if (mysqli_query($connect, $sql)):
            header('Location: ../consultaProdutos.php?sucesso');
        else:
            header('Location: ../consultaProdutos.php?erro');
        endif;
    endif;
?>