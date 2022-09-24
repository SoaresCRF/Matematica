<?php
include("../view/header.php");
include("../funcoes/funcoes.php");
?>

<div class="medium-9 columns" id="wrapper-content">

    <div class="row">

        <div class="small-12 columns">
        </div>

        <div class="small-12 columns">
            <h1>
                Calculadora Equação do Segundo Grau
            </h1>
        </div>

        <div class="small-12 columns">
        </div>

        <div class="small-12 columns">
            <br>

            <div id="container_ferramenta">

                <div id="area_ferramenta">
                    <p>
                        Informe o "A", "B" e "C", e clique em "Calcular Equação". <br>
                        No caso de equação incompleta informe 0 nos respectivos campos.
                    </p>
                </div>

                <form action="equacao_segundo_grau.php" method="post">
                    <div class="row">
                        <div class="medium-4 columns">
                            <span style="margin-right: 35px; display: flex;">Valor A</span><input pattern="[0-9-+.]+" title="Somente números" name="valor_a" id="num1" type="text" class="left margem_porcentagem" style="width: 8rem;" />x²
                        </div>

                        <div class="medium-4 columns">
                            <span style="margin-right: 35px; display: flex;">Valor B</span><input pattern="[0-9-+.]+" title="Somente números" name="valor_b" id=" num2" type="text" class="left margem_porcentagem" style="width: 8rem;" />x
                        </div>

                        <div class="medium-4 columns">
                            <span style="margin-right: 35px; display: flex;">Valor C</span><input pattern="[0-9-+.]+" title="Somente números" name="valor_c" id="num2" type="text" class="left margem_porcentagem" style="width: 8rem;" />
                        </div>
                    </div>

                    <div id="area_botoes" class="text-center">
                        <input type="submit" id="bt_calcular" value="Calcular Equação" class="button round">
                    </div>
                </form>

                <div id="area_resposta">Resposta:
                    <div id="" class="div_texto_resposta">
                        <?php
                        if (
                            isset($_POST['valor_a']) and $_POST['valor_a'] != "" and is_numeric($_POST['valor_a']) and
                            isset($_POST['valor_b']) and $_POST['valor_b'] != "" and is_numeric($_POST['valor_b']) and
                            isset($_POST['valor_b']) and $_POST['valor_b'] != "" and is_numeric($_POST['valor_b'])
                        ) {
                            equacao_segundo_grau();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include("../view/footer.php"); ?>