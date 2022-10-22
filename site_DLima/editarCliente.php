<?php
    include_once 'includes/header.php';

    include_once 'backend/db_connection.php';

    if(isset($_GET['id'])):
        $id =mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM clientes WHERE idCliente = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>
        <div class="form-default">
            <div class="col s12 m6">
                <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-entregador-data">
                        <span class="card-title" style="color: #000 !important;">Cadastro de Cliente</span>
                        <div class="row">
                            <form class="col s12" name ="myform" action="backend/updateClientesDAO.php" method="POST">
                                <div class="row">
                                    <input type="hidden" name="idCliente" value="<?php echo $dados['idCliente']; ?>">
                                    <div class="input-field col s6">
                                        <input placeholder="Nome" id="first_name" name="nome" 
                                        value="<?php echo $dados['nome']; ?>" type="text" class="validate">
                                        <label for="first_name" name="nome">Nome</label>
                                    </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Telefone" id="tel" name="telefone" 
                                        value="<?php echo $dados['telefone']; ?>" type="text" class="validate">
                                        <label for="tel" name="telefone">Contato</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Endereço" id="endereco" name="endereco" 
                                        value="<?php echo $dados['endereco']; ?>" type="text" class="validate">
                                        <label for="endereco" name="endereco">Endereço</label>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <!-- <input type="submit" class="btn waves-effect waves-light" name="btn-cliente" value="Gravar"/>                                       -->
                                    <button class="btn waves-effect waves-light" name="btn-editar-cliente"> Atualizar
                                        <i class="material-icons right">send</i>
                                    </button>
                                    <a href="consultaClientes.php" class="btn green"> Lista de Clientes </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    include_once 'includes/footer.php';
?>