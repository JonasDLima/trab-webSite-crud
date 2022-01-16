<?php
    include_once 'includes/header.php';
?>
        <div class="form-default">
            <div class="col s12 m6">
                <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-entregador-data">
                        <span class="card-title" style="color: #000 !important;">Cadastro de Cliente</span>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Nome" id="first_name" type="text" class="validate">
                                        <label for="first_name">Nome</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Sobrenome" id="last_name" type="text" class="validate">
                                        <label for="last_name">Sobrenome</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Telefone" id="tel" type="text" class="validate">
                                        <label for="tel">Contato</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Endereço" id="endereco" type="text" class="validate">
                                        <label for="endereco">Endereço</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="isNotificacao">Deseja receber novidades e promoções via WhatsApp?</label>
                                    <div class="switch">
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
                        <button class="btn waves-effect waves-light subButton" type="submit" name="action">Cadastrar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
<?php
    include_once 'includes/footer.php';
?>