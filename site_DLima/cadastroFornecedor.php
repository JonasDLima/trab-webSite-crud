<?php
    include_once 'includes/header.php';
?>
        <div class="form-default">
            <div class="col s12 m6">
                <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-entregador-data">
                        <span class="card-title" style="color: #000 !important;">Cadastro de Fornecedor</span>
                        <div class="row">
                            <form class="col s12" action="backend/fornecedoresDAO.php" method="POST">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Nome" id="first_name" name="nome" type="text" class="validate">
                                        <label for="first_name">Nome</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Razaão Social" id="razaoSoci" name="razaoSoci" type="text" class="validate">
                                        <label for="razaooSoci">Razão Social</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="CNPJ" id="cnpj" name="cnpj" type="text" class="validate">
                                        <label for="cnpj">CNPJ</label>
                                    </div>
                                </div>
                                <label>Tipo de Produto Fornecido</label>
                                <div class="input-field">
                                    <select class="browser-default" name="tpProd">
                                        <option value="" disabled selected>Selecione o tipo de produto</option>
                                        <option value="1">Alimentício</option>
                                        <option value="2">Bebidas</option>
                                    </select>
                                </div>
                                <div class="card-action">
                                    <button class="btn waves-effect waves-light" type="submit" name="btn-fornecedor"> Cadastrar
                                        <i class="material-icons right">send</i>
                                    </button>
                                    <a href="consultaFornecedores.php" class="btn green"> Lista de Fornecedores </a>
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