<?php include("../view/header.php"); ?>

<div class="medium-9 columns" id="wrapper-content">
    <div class="row">
        <div class="small-12 columns"></div>

        <div class="small-12 columns">
            <h1>
                Calculadora Área do Quadrado
            </h1>
        </div>

        <div class="small-12 columns"></div>

        <div class="small-12 columns">
            <br>

            <div id="container_ferramenta">

                <div id="area_ferramenta">
                    <p>Informe o lado do quadrado e clique em "Calcular Área".</p>
                </div>

                <form action="area_quadrado.php" method="post">
                    <div class="row">
                        <div class="medium-4 columns">
                            <span style="margin-right: 35px; display: flex;">Lado</span><input pattern="[0-9]+" title="Somente números" name="lado" id="num2" type="text" class="left margem_porcentagem" style="width: 8rem;" />
                        </div>
                    </div>

                    <div id="area_botoes" class="text-center">
                        <input type="submit" id="bt_calcular" value="Calcular Área" class="button round">
                    </div>
                </form>

                <div id="area_resposta">Resposta:
                    <div id="texto_resposta" class="div_texto_resposta">
                        <?php
                        if (isset($_POST['lado']) and $_POST['lado'] != "" and is_numeric($_POST['lado'])) {
                            $lado = preg_replace('/[^0-9]/', "", $_POST['lado']);
                            echo "A área do quadrado: $lado * $lado = " . number_format($lado * $lado, 2, ".");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../view/footer.php"); ?>