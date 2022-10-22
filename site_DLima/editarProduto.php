<?php
    include_once 'includes/header.php';

    include_once 'backend/db_connection.php';

    if(isset($_GET['id'])):
        $id =mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM produtos WHERE idProduto = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>
        <div class="form-default">
                <div class="col s12 m6">
                  <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-login-data">
                      <span class="card-title" style="color: #000 !important;">Cadastro de Produtos</span>
                      <form  class="col s12" action="backend/updateProdutosDAO.php" method="POST">
                        <div class="row">
                        <input type="hidden" name="idProduto" value="<?php echo $dados['idProduto']; ?>">
                          <div class="input-field col s6">
                            <input id="descricao" type="text" name="descricao" class="validate"
                            value="<?php echo $dados['descProduto']; ?>">
                            <label for="descricao">Descrição do Produto</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s6">
                              <input id="quantidadeEstoque" type="number" name="quantidade" class="validate"
                              value="<?php echo $dados['qtdEstoque']; ?>">
                              <label for="quantidadeEstoque">Quantidade em estoque</label>
                          </div>
                        </div>
                        <div class="card-action">
                          <button class="btn waves-effect waves-light" type="submit" name="btn-editar-produto"> Atualizar
                            <i class="material-icons right">send</i>
                          </button>
                          <a href="consultaProdutos.php" class="btn green"> Lista de Produtos </a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
        </div>
<?php
    include_once 'includes/footer.php';
?>