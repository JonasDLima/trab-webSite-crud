<?php
    include_once 'includes/header.php';
?>
        <div class="form-default">
            <div class="col s12 m12">
                <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-entregador-data">
                        <span class="card-title" style="color: #000 !important;">Cadastro de Entregador</span>
                        <div class="row">
                            <form class="col s12" action="backend/entregadoresDAO.php" method="POST">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Nome" id="first_name" name="nome" type="text" class="validate">
                                        <label for="first_name">Nome</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Sobrenome" id="last_name" name="sobrenome" type="text" class="validate">
                                        <label for="last_name">Sobrenome</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- <input type="text" class="datepicker" format="dd mm, yy" name="dtNasc"> -->
                                        <input id="dataNasc" type="date" name="dtNasc" class="validate" value="08-02-22">
                                        <label for="dataNasc">Data de Nascimento</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="RG" id="rg" type="text" name="rg" class="validate">
                                        <label for="rg">RG</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="CPF" id="cpf" type="text" name="cpf" class="validate">
                                        <label for="cpf">CPF</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="rgDoc">RG Frente e Verso</label>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>ARQUIVO</span>
                                            <input type="file" multiple name="rgDoc">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text"
                                                placeholder="Carregue os arquivos">
                                        </div>
                                    </div>
                                </div>
                                <div class="row col s6">
                                    <label for="veiculo">Veículo</label>
                                    <p>
                                        <label>
                                            <input type="checkbox" value="Carro" name="veiculo" class="filled-in"/>
                                            <span>Carro</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" value="Moto" name="veiculo" class="filled-in"/>
                                            <span>Moto</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" value="Bicicleta" name="veiculo" class="filled-in"/>
                                            <span>Bicicleta</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="placa" type="text" name="placa" class="validate">
                                        <label for="placa">Placa</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="docVeiculo">Documento do Veículo</label>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>ARQUIVO</span>
                                            <input type="file" name="docVeiculo">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                    <label for="cnh">CNH</label>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>ARQUIVO</span>
                                            <input type="file" name="cnh">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn waves-effect waves-light" type="submit" name="btn-entregador"> Cadastrar
                                        <i class="material-icons right">send</i>
                                    </button>
                                    <a href="consultaEntregadores.php" class="btn green"> Lista de Entregadores </a>
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