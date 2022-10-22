<?php
    include_once 'includes/header.php';

    require_once 'backend/db_connection.php';

    session_start();

    if(!isset($_SESSION['logado'])):
        header('Location: index.php');
    endif;

    $idUsuario = $_SESSION['id_usuario'];

    $sql = "SELECT * FROM usuarios where idUsuario='$idUsuario'";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);
?>
<h1>Bem Vindo <?php echo $dados['userName']; ?> a Fome De Leão!!</h1>
<hr>

<?php
    include_once 'includes/footer.php';
?>