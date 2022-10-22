<?php
    include_once 'backend/db_connection.php';

    include_once 'includes/header.php';
?>
        <div class="form-default">
          <div class="col s12 m6">
              <div class="card amber lighten-3 content-border-default">
                <div class="card-content black-text form-login-data">
                    <span class="card-title" style="color: #000 !important;">Listagem de Filiais</span>
                    <table class="responsive-table highlight">
                    <thead>
                      <tr>
                          <th>Gerente</th>
                          <th>Endereço</th>
                          <th>Contato</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $sql="SELECT * FROM filiais";
                      $resultado= mysqli_query($connect, $sql);

                      if (mysqli_num_rows($resultado)>0) :
                        while($dados= mysqli_fetch_array($resultado)):
                      ?>
                      <tr>
                        <td><?php echo $dados['gerente'];?></td>
                        <td><?php echo $dados['endereco'];?></td>
                        <td><?php echo $dados['contato'];?></td>
                        <td><a href="editarFilial.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="modal<?php echo $dados['id'];?>" class="btn-floating red"><i class="material-icons">delete</i></a></td>


                        <!-- Modal delete -->
                          <div id="modal<?php echo $dados['id'];?>" class="modal">
                            <div class="modal-content">
                              <h3>Atenção!</h3>
                              <p>Deseja excluir essa filial?</p>
                            </div>
                            <div class="modal-footer">
                              <form action="delete.php" method="POST">
                                <input type="hidden" name="id" value=">?php echo $dados['id'];?>">
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
                          <!-- <button class="btn waves-effect waves-light subButton" type="submit" name="action">Adicionar Cliente
                            <i class="material-icons right">send</i>
                          </button> -->
                          <a href="cadastroFilial.php" class="btn green"> Adicionar Filial </a>
                    </div>
                </div>
              </div>
            </div>
        <div>
<?php
    include_once 'includes/footer.php';
?>      