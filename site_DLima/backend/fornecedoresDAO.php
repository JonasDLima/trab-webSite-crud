<?php
    require_once 'db_connection.php';

    if (isset($_POST['btn-fornecedor'])):
        // echo "database connect!";
	    $nome = mysqli_escape_string($connect, $_POST['nome']);
        $razaoSoci = mysqli_escape_string($connect, $_POST['razaoSoci']);
        $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);       
        $tpProd = mysqli_escape_string($connect, $_POST['tpProd']);
        
        // echo $nome;
        // echo $razaoSoci;
        // echo $cnpj;
        // echo $tpProd;
    

        $sql = "INSERT INTO fornecedores (nome, razaoSocial, cnpj, tpProduto) 
            VALUES ('$nome',  '$razaoSoci','$cnpj', '$tpProd')";

        if (mysqli_query($connect, $sql)):
            header('Location: ../consultaFornecedores.php?sucesso');
        else:
            header('Location: ../consultaFornecedores.php?erro');
        endif;
    endif;
?>