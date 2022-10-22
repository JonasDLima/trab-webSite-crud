<?php
    include_once 'includes/header.php';
?>
        <div class="form-default">
            <div class="col s12 m6">
                <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-entregador-data">
                        <span class="card-title" style="color: #000 !important;">Cadastro de Filial</span>
                        <div class="row">
                            <form action="backend/filiaisDAO.php" method="POST">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Gerente" id="gerente" name="gerente" type="text" class="validate">
                                        <label for="gerente">Gerente</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Endereço" id="endereco" name="endereco" type="text" class="validate">
                                        <label for="endereco">Endereço</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Contato" id="contato" name="contato" type="text" class="validate">
                                        <label for="contato">Contato</label>
                                    </div>
                                </div>
                                <div class="input-field">
                                    <select class="browser-default" name="diasFuncionamento">
                                        <option value="" disabled selected>Dias de Funcionamento</option>
                                        <option value="1">Seg/Sex</option>
                                        <option value="2">Terça/Dom</option>
                                        <option value="3">Fins de Semana</option>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <!-- <label>Horário de Funcionamento</label> -->
                                    <select class="browser-default" name="horaFuncionamento">
                                      <option value="" disabled selected>Selecione o horário de funcionamento</option>
                                      <option value="1">11:00 às 14:00</option>
                                      <option value="2">18:30 às 23:00</option>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <!-- <label>Tipos de Serviços Prestados</label> -->
                                    <select class="browser-default" name="servPrestados">
                                      <option value="" disabled selected>Selecione os serviços</option>
                                      <option value="1">Marmitex</option>
                                      <option value="2">Lanches</option>
                                      <option value="3">Pizzas</option>
                                    </select>
                                </div>
                                <div class="card-action">
                                    <button class="btn waves-effect waves-light" type="submit" name="btn-filial"> Cadastrar
                                        <i class="material-icons right">send</i>
                                    </button>
                                    <a href="consultaFiliais.php" class="btn green"> Lista de Filiais </a>
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