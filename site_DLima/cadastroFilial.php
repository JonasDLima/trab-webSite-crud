<?php
    include_once 'includes/header.php';
?>
        <div class="form-default">
            <div class="col s12 m6">
                <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-entregador-data">
                        <span class="card-title" style="color: #000 !important;">Cadastro de Filial</span>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <!-- <div class="input-field col s6">
                                        <input placeholder="Cod. Filial" id="codFilial" type="number" class="validate">
                                        <label for="codFilial">Cod. Filial</label>
                                    </div> -->
                                    <div class="input-field col s12">
                                        <input placeholder="Gerente" id="gerente" type="text" class="validate">
                                        <label for="gerente">Gerente</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Endereço" id="endereco" type="text" class="validate">
                                        <label for="endereco">Endereço</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Contato" id="contato" type="text" class="validate">
                                        <label for="contato">Contato</label>
                                    </div>
                                </div>
                                <div class="row col s6">
                                    <label>Dias de Funcionamento</label>
                                    <select class="browser-default">
                                      <option value="" disabled selected>Dias de Funcionamento</option>
                                      <option value="1">Seg/Sex</option>
                                      <option value="2">Terça/Dom</option>
                                      <option value="3">Fins de Semana</option>
                                    </select>
                                </div>
                                <div class="row col s6">
                                    <label>Horário de Funcionamento</label>
                                    <select class="browser-default">
                                      <option value="" disabled selected>Selecione o horário de funcionamento</option>
                                      <option value="1">11:00 às 14:00</option>
                                      <option value="2">18:30 às 23:00</option>
                                    </select>
                                </div>
                                <div class="row col s12">
                                    <label>Tipos de Serviços Prestados</label>
                                    <select class="browser-default">
                                      <option value="" disabled selected>Selecione os serviços</option>
                                      <option value="1">Marmitex</option>
                                      <option value="2">Lanches</option>
                                      <option value="3">Pizzas</option>
                                    </select>
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