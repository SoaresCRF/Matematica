<?php include("../view/header.php"); ?>

<div class="medium-9 columns" id="wrapper-content">

    <div class="row">

        <div class="small-12 columns">
        </div>

        <div class="small-12 columns">
            <h1>
                Calculadora Online da Área do Trapézio
            </h1>
        </div>

        <div class="small-12 columns">
        </div>

        <div class="small-12 columns">
            <br>

            <div id="container_ferramenta">

                <div id="area_ferramenta">
                    <p>Informe as bases e a altura do trapézio e clique em "Calcular Área".</p>
                </div>

                <form action="area_trapezio.php" method="post">
                    <div class="row">
                        <div class="medium-4 columns">
                            Base Maior<input pattern="[0-9]+" title="Somente números" name="base_maior" id="num1" type="text" class="left margem_porcentagem" style="width: 8rem;" />
                        </div>

                        <div class="medium-4 columns">
                            Base Menor<input pattern="[0-9]+" title="Somente números" name="base_menor" id="num2" type="text" class="left margem_porcentagem" style="width: 8rem;" />
                        </div>

                        <div class="medium-4 columns">
                            <span style="margin-right: 35px; display: flex;">Altura</span><input pattern="[0-9]+" title="Somente números" name="altura" id="num2" type="text" class="left margem_porcentagem" style="width: 8rem;" />
                        </div>
                    </div>

                    <div id="area_botoes" class="text-center">
                        <input type="submit" id="bt_calcular" value="Calcular Área" class="button round">
                    </div>
                </form>

                <div id="area_resposta">Resposta:
                    <div id="texto_resposta" class="div_texto_resposta">
                        <?php
                        if (
                            isset($_POST['base_maior']) and $_POST['base_maior'] != "" and is_numeric($_POST['base_maior']) and
                            isset($_POST['base_menor']) and $_POST['base_menor'] != "" and is_numeric($_POST['base_menor']) and
                            isset($_POST['altura']) and $_POST['altura'] != "" and is_numeric($_POST['altura'])
                        ) {
                            $base_maior = preg_replace('/[^0-9]/', "", $_POST['base_maior']);
                            $base_menor = preg_replace('/[^0-9]/', "", $_POST['base_menor']);
                            $altura = preg_replace('/[^0-9]/', "", $_POST['altura']);
                            $area_trapezio = ($base_maior + $base_menor) * $altura / 2;
                            echo "A área do trapézio: ($base_maior + $base_menor) * $altura / 2 = " . number_format($area_trapezio, 2, ".");
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include("../view/footer.php"); ?>