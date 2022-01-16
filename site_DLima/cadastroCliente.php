<?php
    include_once 'includes/header.php';
?>
        <div class="form-default">
            <div class="col s12 m6">
                <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-entregador-data">
                        <span class="card-title" style="color: #000 !important;">Cadastro de Cliente</span>
                        <div class="row">
                            <form class="col s12" action="site_DLima/backend/clientesDAO.php" method="POST">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Nome" id="first_name" type="text" class="validate">
                                        <label for="first_name" name="nome">Nome</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Sobrenome" id="last_name" type="text" class="validate">
                                        <label for="last_name" name="sobrenome">Sobrenome</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Telefone" id="tel" type="text" class="validate">
                                        <label for="tel" name="telefone">Contato</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Endereço" id="endereco" type="text" class="validate">
                                        <label for="endereco" name="endereco">Endereço</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="isNotificacao">Deseja receber novidades e promoções via WhatsApp?</label>
                                    <div class="switch" name="isReceberNovidades">
                                        <label>
                                          Não
                                          <input type="checkbox">
                                          <span class="lever"></span>
                                          SIM
                                        </label>
                                      </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect waves-light" type="submit" name="btn-cliente"> Cadastrar
                            <i class="material-icons right">send</i>
                        </button>
                        <a href="consultaClientes.php" class="btn green"> Lista de Clientes </a>
                    </div>
                </div>
            </div>
        </div>
<?php
    include_once 'includes/footer.php';
?>