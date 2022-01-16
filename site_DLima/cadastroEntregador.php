<?php
    include_once 'includes/header.php';
?>
        <div class="row form-default">
            <div class="col s12 m12">
                <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-entregador-data">
                        <span class="card-title" style="color: #000 !important;">Cadastro de Entregador</span>
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
                                    <div class="input-field col s12">
                                        <input id="dataNasc" type="text" class="validate">
                                        <label for="dataNasc">Data de Nascimento</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="RG" id="rg" type="text" class="validate">
                                        <label for="rg">RG</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="CPF" id="cpf" type="text" class="validate">
                                        <label for="cpf">CPF</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="rgDoc">RG Frente e Verso</label>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>ARQUIVO</span>
                                            <input type="file" multiple>
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
                                            <input type="checkbox" class="filled-in" checked="checked" />
                                            <span>Carro</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="filled-in" checked="checked" />
                                            <span>Moto</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="filled-in" checked="checked" />
                                            <span>Bicicleta</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="placa" type="text" class="validate">
                                        <label for="placa">Placa</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="docVeiculo">Documento do Veículo</label>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>ARQUIVO</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                    <label for="cnh">CNH</label>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>ARQUIVO</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
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