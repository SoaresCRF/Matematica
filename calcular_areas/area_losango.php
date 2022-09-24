<?php include("../view/header.php"); ?>
<div class="medium-9 columns" id="wrapper-content">
    <div class="row">
        <div class="small-12 columns"></div>

        <div class="small-12 columns">
            <h1>
                Calculadora da Área do Losango
            </h1>
        </div>

        <div class="small-12 columns"></div>

        <div class="small-12 columns">
            <br>

            <div id="container_ferramenta">

                <div id="area_ferramenta">
                    <p>Informe a diagonal maior e menor do losango e clique em "Calcular Área".</p>
                </div>

                <form action="area_losango.php" method="post">
                    <div class="row">
                        <div class="medium-4 columns">
                            Diagonal Maior<input pattern="[0-9]+" title="Somente números" name="diagonal_maior" id="num1" type="text" class="left margem_porcentagem" style="width: 8rem;" />
                        </div>

                        <div class="medium-4 columns">
                            Diagonal Menor<input pattern="[0-9]+" title="Somente números" name="diagonal_menor" id="num2" type="text" class="left margem_porcentagem" style="width: 8rem;" />
                        </div>
                    </div>

                    <div id="area_botoes" class="text-center">
                        <input type="submit" id="bt_calcular" value="Calcular Área" class="button round">
                    </div>
                </form>

                <div id="area_resposta">Resposta:
                    <div id="texto_resposta" class="div_texto_resposta">
                        <?php
                        if (isset($_POST['diagonal_maior']) and isset($_POST['diagonal_menor']) and $_POST['diagonal_maior'] != "" and $_POST['diagonal_menor'] != "" and is_numeric($_POST['diagonal_maior']) and is_numeric($_POST['diagonal_menor'])) {
                            $diagonal_maior = preg_replace('/[^0-9]/', "", $_POST['diagonal_maior']);
                            $diagonal_menor = preg_replace('/[^0-9]/', "", $_POST['diagonal_menor']);
                            $area_losango = $diagonal_maior * $diagonal_menor / 2;
                            echo "A área do losango: $diagonal_maior * $diagonal_menor / 2 = " .  number_format($area_losango, 2, ".");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("../view/footer.php"); ?>