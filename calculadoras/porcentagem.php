<?php
include("../view/header.php");
include("../funcoes/calculos_porcetagens.php");
?>

<div class="medium-9 columns" id="wrapper-content">

    <div class="row">

        <div class="small-12 columns">
        </div>

        <div class="small-12 columns">
        </div>

        <div class="small-12 columns">
        </div>

        <div class="small-12 columns">


            <div id="app-wrapper" class="percentage-gen">
                <div class="app-header">
                    <h1 class="app-title">Calculadora de porcentagem online</h1>
                    <p class="app-info">Ferramenta online que permite calcular porcentagem de várias formas, aumentos, descontos, proporções, etc. <br />Basta escolher qual das calculadoras de porcentagem mais se aplica ao seu problema, digitar nos espaços e clicar no botão calcular da linha correspondente.</p>
                </div>

                <div class="app-input">
                    <div class="input-title">Opções:</div>
                    <div class="app-card">

                        <form action="porcentagem.php" method="post">
                            <div class="row app-container" data-calcfeat="1">
                                <div class="feature-container">
                                    Quanto é
                                    <div class="is-percentage">
                                        <label for="porc1_num1" class="visually-hidden">percentagem:</label>
                                        <input placeholder="- -" name="porcento" type="number" id="porc1_num1" title="Digite aqui o número base da porcentagem, Quanto é" />
                                        <span>%</span>
                                    </div>
                                    de
                                    <label for="porc1_num2" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" name="valor" type="number" id="porc1_num2" title="Digite aqui quantos % do número anterior você quer saber." />
                                    ?
                                </div>
                                <div class="actions-container">
                                    <button class="percentage-btn" name="calcular1" value="calcular1" data-calcbutton="1" id="bt_porcentagem1">Calcular</button>
                                    <div id="res-porcentagem1" class="result-container">
                                        <?php
                                        if (isset($_POST['porcento']) and isset($_POST['valor']) and $_POST['porcento'] != "" and $_POST['valor'] != "" and is_numeric($_POST['porcento']) and is_numeric($_POST['valor'])) { ?>
                                            <span style="color: #3C99C4; font-weight: bold; font-size: 18px;"> <?php calcular1(); ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="errors-container"></div>
                            </div>
                        </form>

                        <div class="app-divider"></div>

                        <form action="porcentagem.php" method="post">
                            <div class="row app-container" data-calcfeat="2">
                                <div class="detailed-container"></div>
                                <div class="feature-container">
                                    O valor
                                    <label for="porc2_num1" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" name="valor1" type="number" id="porc2_num1" title="Digite aqui o número base da porcentagem, Quanto é" />
                                    é qual porcentagem de
                                    <label for="porc2_num2" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" name="valor2" type="number" id="porc2_num2" title="Digite aqui quantos % do número anterior você quer saber." />
                                    ?
                                </div>
                                <div class="actions-container">
                                    <button class="percentage-btn" name="calcular2" value="calcular2" data-calcbutton="2" id="bt_porcentagem2">Calcular</button>
                                    <div id="res-porcentagem1" class="result-container">
                                        <?php
                                        if (isset($_POST['valor1']) and isset($_POST['valor2']) and $_POST['valor1'] != "" and $_POST['valor2'] != "" and is_numeric($_POST['valor1']) and is_numeric($_POST['valor2'])) { ?>
                                            <span style="color: #3C99C4; font-weight: bold; font-size: 18px;"> <?php calcular2(); ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="errors-container"></div>
                            </div>
                        </form>

                        <div class="app-divider"></div>
                        <div id="div-gpt-ad-1581433021905-0" class="ad-unit ad-unit--pt-br pull-left-18"></div>

                        <form action="porcentagem.php" method="post">
                            <div class="row app-container" data-calcfeat="3">
                                <div class="feature-container">
                                    Um valor de
                                    <label for="porc3_num1" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" name="valor_inicial" type="number" id="porc3_num1" title="Digite aqui o número base da porcentagem, Quanto é" />
                                    que <b>AUMENTOU</b> para
                                    <label for="porc3_num2" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" name="valor_final" type="number" id="porc3_num2" title="Digite aqui quantos % do número anterior você quer saber." />
                                    Qual foi o aumento percentual?
                                </div>
                                <div class="actions-container">
                                    <button class="percentage-btn" name="calcular4" value="calcular3" data-calcbutton="3" id="bt_porcentagem3">Calcular</button>
                                    <div id="res-porcentagem1" class="result-container">
                                        <?php
                                        if (isset($_POST['valor_inicial']) and isset($_POST['valor_final']) and $_POST['valor_inicial'] != "" and $_POST['valor_final'] != "" and is_numeric($_POST['valor_inicial']) and is_numeric($_POST['valor_final'])) { ?>
                                            <span style="color: #3C99C4; font-weight: bold; font-size: 18px;"> <?php calcular3(); ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="errors-container"></div>
                            </div>
                        </form>

                        <div class="app-divider"></div>

                        <form action="porcentagem.php" method="post">
                            <div class="row app-container" data-calcfeat="4">
                                <div class="feature-container">
                                    Um valor de
                                    <label for="porc4_num1" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" name="valor_inicial2" type="number" id="porc4_num1" title="Digite aqui o número base da porcentagem, Quanto é" />
                                    que <b>DIMINUIU</b> para
                                    <label for="porc4_num2" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" name="valor_final2" type="number" id="porc4_num2" title="Digite aqui quantos % do número anterior você quer saber." />
                                    Qual foi a diminuição percentual?
                                </div>
                                <div class="actions-container">
                                    <button class="percentage-btn" name="calcular4" value="calcular4" data-calcbutton="4" id="bt_porcentagem4">Calcular</button>
                                    <div id="res-porcentagem1" class="result-container">
                                        <?php
                                        if (isset($_POST['valor_inicial2']) and isset($_POST['valor_final2']) and $_POST['valor_inicial2'] != "" and $_POST['valor_final2'] != "" and is_numeric($_POST['valor_inicial2']) and is_numeric($_POST['valor_final2'])) { ?>
                                            <span style="color: #3C99C4; font-weight: bold; font-size: 18px;"> <?php calcular4(); ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="errors-container"></div>
                            </div>
                        </form>

                        <div class="app-divider"></div>

                        <form action="porcentagem.php" method="post">
                            <div class="row app-container" data-calcfeat="5">
                                <div class="feature-container">
                                    O valor
                                    <label for="porc5_num1" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" type="number" id="porc5_num1" title="Digite aqui o número base da porcentagem, Quanto é" />
                                    sobre o valor
                                    <label for="porc5_num2" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" type="number" id="porc5_num2" title="Digite aqui quantos % do número anterior você quer saber." />
                                    é quantos por cento?
                                </div>
                                <div class="actions-container">
                                    <button class="percentage-btn" name="calcular5" value="calcular5" data-calcbutton="5" id="bt_porcentagem5">Calcular</button>
                                    <div id="res-porcentagem5" class="result-container">- - - -</div>
                                </div>
                                <div class="errors-container"></div>
                            </div>
                        </form>

                        <div class="app-divider"></div>

                        <form action="porcentagem.php" method="post">
                            <div class="row app-container" data-calcfeat="6">
                                <div class="detailed-container"></div>
                                <div class="feature-container">
                                    Tenho um valor de
                                    <label for="porc6_num1" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" type="number" id="porc6_num1" title="Digite aqui o número base da porcentagem, Quanto é" />
                                    e quero <b>AUMENTAR</b>
                                    <div class="is-percentage">
                                        <label for="porc6_num2" class="visually-hidden">percentagem:</label>
                                        <input placeholder="- -" type="number" id="porc6_num2" title="Digite aqui quantos % do número anterior você quer saber." />
                                        <span>%</span>
                                    </div>
                                    Qual é o resultado?
                                </div>
                                <div class="actions-container">
                                    <button class="percentage-btn" name="calcular6" value="calcular6" data-calcbutton="6" id="bt_porcentagem6">Calcular</button>
                                    <div id="res-porcentagem6" class="result-container">- - - -</div>
                                </div>
                                <div class="errors-container"></div>
                            </div>
                        </form>

                        <div class="app-divider"></div>

                        <form action="porcentagem.php" method="post">
                            <div class="row app-container" data-calcfeat="7">
                                <div class="feature-container">
                                    Tenho um valor de
                                    <label for="porc7_num1" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" type="number" id="porc7_num1" title="Digite aqui o número base da porcentagem, Quanto é" />
                                    e quero <b>DIMINUIR</b>
                                    <div class="is-percentage">
                                        <label for="porc7_num2" class="visually-hidden">percentagem:</label>
                                        <input placeholder="- -" type="number" id="porc7_num2" title="Digite aqui quantos % do número anterior você quer saber." />
                                        <span>%</span>
                                    </div>
                                    Qual é o resultado?
                                </div>
                                <div class="actions-container">
                                    <button class="percentage-btn" name="calcular7" value="calcular7" data-calcbutton="7" id="bt_porcentagem7">Calcular</button>
                                    <div id="res-porcentagem7" class="result-container">- - - -</div>
                                </div>
                                <div class="errors-container"></div>
                            </div>
                        </form>

                        <div class="app-divider"></div>

                        <form action="porcentagem.php" method="post">
                            <div class="row app-container" data-calcfeat="8">
                                <div class="feature-container">
                                    Tenho um valor inicial que <b>AUMENTOU</b> em
                                    <div class="is-percentage">
                                        <label for="porc8_num1" class="visually-hidden">percentagem:</label>
                                        <input placeholder="- -" type="number" id="porc8_num1" title="Digite aqui o número base da porcentagem, Quanto é" />
                                        <span>%</span>
                                    </div>
                                    e passou para
                                    <label for="porc8_num2" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" type="number" id="porc8_num2" title="Digite aqui quantos % do número anterior você quer saber." />
                                    . Qual é o valor inicial?
                                </div>
                                <div class="actions-container">
                                    <button class="percentage-btn" name="calcular8" value="calcular8" data-calcbutton="8" id="bt_porcentagem8">Calcular</button>
                                    <div id="res-porcentagem8" class="result-container">- - - -</div>
                                </div>
                                <div class="errors-container"></div>
                            </div>
                        </form>

                        <div class="app-divider"></div>

                        <form action="porcentagem.php" method="post">
                            <div class="row app-container" data-calcfeat="9">
                                <div class="feature-container">
                                    Tenho um valor inicial que <b>DIMINUIU</b> em
                                    <div class="is-percentage">
                                        <label for="porc9_num1" class="visually-hidden">percentagem:</label>
                                        <input placeholder="- -" type="number" id="porc9_num1" title="Digite aqui o número base da porcentagem, Quanto é" />
                                        <span>%</span>
                                    </div>
                                    e passou para
                                    <label for="porc9_num2" class="visually-hidden">valor:</label>
                                    <input placeholder="- -" type="number" id="porc9_num2" title="Digite aqui quantos % do número anterior você quer saber." />
                                    . Qual é o valor inicial?
                                </div>
                                <div class="actions-container">
                                    <button class="percentage-btn" name="calcular9" value="calcular9" data-calcbutton="9" id="bt_porcentagem9">Calcular</button>
                                    <div id="res-porcentagem9" class="result-container">- - - -</div>
                                </div>
                                <div class="errors-container"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="copy-info">Clique para copiar</div>
            </div>
        </div>
    </div>

</div>

<?php include("../view/footer.php"); ?>