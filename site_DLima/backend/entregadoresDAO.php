<?php
    require_once 'db_connection.php';

    if (isset($_POST['btn-entregador'])):
        echo "database connect!";
	    $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $nomeCompleto = $nome. " ".$sobrenome;        
        $dtNasc = mysqli_escape_string($connect, $_POST['dtNasc']);
        $rg = mysqli_escape_string($connect, $_POST['rg']);
        $cpf = mysqli_escape_string($connect, $_POST['cpf']);
        $veiculo = mysqli_escape_string($connect, $_POST['veiculo']);
        $placa = mysqli_escape_string($connect, $_POST['placa']);
        $docVeiculo = $_FILES["docVeiculo"];
        if($docVeiculo != NULL) :
            $nomeFinal = time().'.jpg';
            if (move_uploaded_file($docVeiculo['tmp_name'], $nomeFinal)) :
                $tamanhoImg = filesize($nomeFinal);
        
                $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
            endif;
        else :
            echo"Você não realizou o upload de forma satisfatória.";
        endif;
        // echo $nomeCompleto;
        // echo $dtNasc;
        // echo $rg;
        // echo $cpf;
        // echo $veiculo;
        // echo $placa;
        // echo $mysqlImg;

        $sql = "INSERT INTO entregadores (nome, dataNascimento, rg, cpf, veiculo, placa, docVeiculo) 
            VALUES ('$nomeCompleto',  '$dtNasc', '$rg', '$cpf', '$veiculo', '$placa', '$mysqlImg')";

        unlink($nomeFinal);

        if (mysqli_query($connect, $sql)):
            header('Location: ../consultaEntregadores.php?sucesso');
        else:
            header('Location: ../consultaEntregadores.php?erro');
        endif;
    endif;
?>