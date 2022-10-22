<?php
    // include_once 'includes/header.php';
  require_once 'backend/db_connection.php';

  session_start();

  if (isset($_POST['btn-entrar'])):
    $erros = array();

    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);


    if (empty($login) or empty($senha)):
      $errors[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
      $senha= md5($senha);
      $sql= "SELECT idUsuario,userName FROM usuarios WHERE userName= '$login' AND password= '$senha'";

      $resultado = mysqli_query($connect,$sql);
      mysqli_close($connect);

      if (mysqli_num_rows($resultado) > 0):
        $dados=mysqli_fetch_array($resultado);
        $_SESSION['logado']= true;
        $_SESSION['id_usuario']= $dados['idUsuario'];
        header('Location: cardapio.php');
      else:
        $erros[]= "<li>Usuário e senha não conferem</li>";
      endif;
    endif;
  endif;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fome de Leão - Lanchonete</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="conteudo">
      <article>
        <div class="form-default">
                <div class="col s12 m6">
                  <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-login-data">
                      <span class="card-title" style="color: #000 !important;">Login</span>
                      <form class="col s12" name="myform" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="user" name="login" type="text" class="validate">
                            <label for="user">Login</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="password" name="senha" type="password" class="validate">
                            <label for="password">Password</label>
                          </div>
                        </div>
                        <div class="card-action">
                          <button class="btn waves-effect waves-light subButton" type="submit" name="btn-entrar">Submit
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
        </div>
<?php
    include_once 'includes/footer.php';
?>