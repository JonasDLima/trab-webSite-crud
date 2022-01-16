<?php
    include_once 'includes/header.php';
?>
        <div class="form-default">
            <div class="col s12 m6">
                <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-entregador-data">
                        <span class="card-title" style="color: #000 !important;">Cadastro de Fornecedor</span>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Nome" id="first_name" type="text" class="validate">
                                        <label for="first_name">Nome</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Razaão Social" id="razaoSoci" type="text" class="validate">
                                        <label for="razaooSoci">Razão Social</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="input-field col s6">
                                        <input placeholder="Cod. Fornecedor" id="codFornec" type="text" class="validate">
                                        <label for="CodForne">Cod. Fornecedor</label>
                                    </div> -->
                                    <div class="input-field col s6">
                                        <input placeholder="CNPJ" id="cnpj" type="text" class="validate">
                                        <label for="cnpj">CNPJ</label>
                                    </div>
                                </div>
                                <div class="row col s12">
                                    <label>Tipo de Produto Fornecido</label>
                                    <select class="browser-default">
                                      <option value="" disabled selected>Selecione o tipo de produto</option>
                                      <option value="1">Alimentício</option>
                                      <option value="2">Bebidas</option>
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