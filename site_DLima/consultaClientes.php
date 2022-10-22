<?php
  include_once 'backend/db_connection.php';

  include_once 'includes/header.php';

  // include_once 'mensagem.php';
?>
        <div class="form-default">
          <div class="col s12 m6">
              <div class="card amber lighten-3 content-border-default">
                <div class="card-content black-text form-login-data">
                    <span class="card-title">Listagem de Clientes</span>
                    <table class="responsive-table highlight">
                    <thead>
                      <tr>
                          <th>Nome</th>
                          <th>Telefone</th>
                          <th>Endereço</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $sql="SELECT * FROM clientes";
                      $resultado= mysqli_query($connect, $sql);

                      if (mysqli_num_rows($resultado)>0) :
                        while($dados= mysqli_fetch_array($resultado)):
                      ?>
                      <tr>
                        <td><?php echo $dados['nome'];?></td>
                        <td><?php echo $dados['telefone'];?></td>
                        <td><?php echo $dados['endereco'];?></td>
                        <td><a href="editarCliente.php?id=<?php echo $dados['idCliente'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="#modal<?php echo $dados['idCliente'];?>" class="btn-floating red"><i class="material-icons">delete</i></a></td>


                        <!-- Modal delete -->
                          <div id="modal<?php echo $dados['idCliente'];?>" class="modal">
                            <div class="modal-content">
                              <h3>Atenção!</h3>
                              <p>Deseja excluir esse cliente?</p>
                            </div>
                            <div class="modal-footer">
                              <form action="backend/deletarClientesDAO.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['idCliente'];?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                <a href="#!" class="modal-clase waves-effect waves-green btn-flat">Cancelar</a>
                              </form>
                            </div>
                          </div>
                      </tr>
                      <?php
                      endwhile;
                      else: 
                      ?>
                        <tr>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                      <?php
                      endif;
                      ?>
                    </tbody>
                    </table>
                    <div class="card-action">
                      <!-- <button class="btn waves-effect waves-light" type="submit" name="action">Adicionar Cliente
                        <i class="material-icons right">send</i>
                      </button> -->
                      <a href="cadastroCliente.php" class="btn green"> Adicionar Cliente </a>
                    </div>
                </div>
              </div>
            </div>
        <div>
<?php
    include_once 'includes/footer.php';
?>