<!DOCTYPE html>
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
        <header>
            <nav>
              <div class="nav-wrapper amber darken-1">
                  <a href="#!" class="brand-logo">
                      FomeDLeão
                      <img class="logo" src="imagens/logo.jpg" alt="">
                  </a>
                  <ul id="navbar-items" class="right hide-on-med-and-down">
                      <li><a href="#">Cardapio</a></li>
                      <!-- Dropdown Trigger -->
                      <li>
                          <a class="dropdown-trigger" data-target="dropdown-menu" href="#">
                              Cadastros <i class="material-icons right">arrow_drop_down</i>
                          </a>
                      </li>
                      <li>
                          <a class="dropdown-trigger" href="#" data-target="dropdown-menu1">
                              Consultas <i class="material-icons right">arrow_drop_down</i>
                          </a>
                      </li>
                      <li><a href="index.php">Sair</a></li>
                  </ul>
                  <!-- Dropdown Structure -->
                  <ul id="dropdown-menu" class="dropdown-content">
                      <li><a href="cadastroProduto.php">Produto</a></li>
                      <li class="divider"></li>
                      <li><a href="cadastroCliente.php">Cliente</a></li>
                      <li><a href="cadastroFornecedor.php">Fornecedor</a></li>
                      <li><a href="cadastroEntregador.php">Entregador</a></li>
                      <li><a href="cadastroFilial.php">Filial</a></li>
                  </ul>
                  <ul id="dropdown-menu1" class="dropdown-content">
                      <li><a href="consultaProdutos.php">Produtos</a></li>
                      <li class="divider"></li>
                      <li><a href="consultaClientes.php">Clientes</a></li>
                      <li><a href="consultaFornecedores.php">Fornecedores</a></li>
                      <li><a href="consultaEntregadores.php">Entregador</a></li>
                      <li><a href="consultaFiliais.php">Filiais</a></li>
                    </ul>
              </div>
            </nav>
        </header>
        <article>