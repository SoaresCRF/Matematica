<?php include("../view/header.php"); ?>

<div class="medium-9 columns" id="wrapper-content">
    <div class="row">
        <div class="small-12 columns"></div>

        <div class="small-12 columns">
            <h1>
                Calculadora da Área do Triângulo
            </h1>
        </div>

        <div class="small-12 columns"></div>

        <div class="small-12 columns">
            <br>

            <div id="container_ferramenta">

                <div id="area_ferramenta">
                    <p>Informe a base e a altura do triângulo e clique em "Calcular Área".</p>
                </div>

                <form action="area_triangulo.php" method="post">
                    <div class="row">
                        <div class="medium-4 columns">
                            <span style="margin-right: 35px; display: flex;">Base</span><input pattern="[0-9]+" title="Somente números" name="base" id="num2" type="text" class="left margem_porcentagem" style="width: 8rem;" />
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
                        if (isset($_POST['base']) and isset($_POST['altura']) and $_POST['base'] != "" and $_POST['altura'] != "" and is_numeric($_POST['base']) and is_numeric($_POST['altura'])) {
                            $base = preg_replace('/[^0-9]/', "", $_POST['base']);
                            $altura = preg_replace('/[^0-9]/', "", $_POST['altura']);
                            $area_triangulo = $base * $altura / 2;
                            echo "A área do triângulo: $base * $altura / 2 = " .  number_format($area_triangulo, 2, ".");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("../view/footer.php"); ?>