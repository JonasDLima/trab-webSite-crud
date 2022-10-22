<?php
    require_once 'db_connection.php';

    if (isset($_POST['btn-filial'])):
        // echo "database connect!";
	    $gerente = mysqli_escape_string($connect, $_POST['gerente']);
        $endereco = mysqli_escape_string($connect, $_POST['endereco']);
        $contato = mysqli_escape_string($connect, $_POST['contato']);       
        $diasFuncionamento = mysqli_escape_string($connect, $_POST['diasFuncionamento']);
        $horaFuncionamento = mysqli_escape_string($connect, $_POST['horaFuncionamento']);
        $servPrestados = mysqli_escape_string($connect, $_POST['servPrestados']);
        
        // echo $gerente;
        // echo $endereco;
        // echo $contato;
        // echo $diasFuncionamento;
        // echo $horaFuncionamento;
        // echo $servPrestados;
    

        $sql = "INSERT INTO filiais (gerente, endereco, contato, diasFuncionamento, horarioFuncionamento, tpServico) 
            VALUES ('$gerente',  '$endereco','$contato', '$diasFuncionamento', '$horaFuncionamento', '$servPrestados')";

        if (mysqli_query($connect, $sql)):
            header('Location: ../consultaFiliais.php?sucesso');
        else:
            header('Location: ../consultaFiliais.php?erro');
        endif;
    endif;
?>