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
                Validar CPF
            </h1>
        </div>

        <div class="small-12 columns">
        </div>

        <div class="small-12 columns">
            <br>

            <div id="container_ferramenta">

                <div id="area_ferramenta">
                    <p>
                        Informe o CPF.
                    </p>
                </div>

                <form action="validar_cpf.php" method="post">
                    <div class="row">
                        <div class="medium-4 columns">
                            <span style="margin-right: 35px; display: flex;">Informe o CPF</span><input pattern="[0-9-+.]+" title="Somente números" name="cpf" id="cpf" type="text" class="left margem_porcentagem" style="width: 8rem;" />
                        </div>
                    </div>

                    <div id="area_botoes" class="text-center">
                        <input type="submit" id="bt_calcular" value="Fatorar" class="button round">
                    </div>
                </form>

                <div id="area_resposta">Resposta:
                    <div id="" class="div_texto_resposta">
                        <?php
                        if (isset($_POST['cpf']) and $_POST['cpf'] != "") {
                            validar_cpf();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="../js/mask.js"></script>

<?php include("../view/footer.php"); ?>