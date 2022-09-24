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
                        Informe o número que deseja fatorar no campo e clique em "Fatorar".
                    </p>
                </div>

                <form action="fatorar.php" method="post">
                    <div class="row">
                        <div class="medium-4 columns">
                            <span style="margin-right: 35px; display: flex;">Informe o número</span><input pattern="[0-9-+.]+" title="Somente números" name="num1" id="num1" type="text" class="left margem_porcentagem" style="width: 8rem;" />
                        </div>
                    </div>

                    <div id="area_botoes" class="text-center">
                        <input type="submit" id="bt_calcular" value="Fatorar" class="button round">
                    </div>
                </form>

                <div id="area_resposta">Resposta:
                    <div id="" class="div_texto_resposta">
                        <?php
                        if (isset($_POST['num1']) and $_POST['num1'] != "" and is_numeric($_POST['num1'])) {
                            fatorar();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include("../view/footer.php"); ?>