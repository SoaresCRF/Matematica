<?php

function equacao_segundo_grau()
{

    $a = preg_replace('/[^0-9-+.]/', "", $_POST['valor_a']);
    $b = preg_replace('/[^0-9-+.]/', "", $_POST['valor_b']);
    $c = preg_replace('/[^0-9-+.]/', "", $_POST['valor_c']);

    if ($b != 0) { ?>
        <span>Calculo do delta: </span><br>
        <span>&Delta; = b² - 4.a.c</span><br>
        <span>&Delta; = <?php echo $b; ?>² - 4.<?php echo $a; ?>.<?php echo $c; ?></span><br>
        <span>&Delta; = <?php echo $b * $b; ?> - <?php echo 4 * $a * $c; ?></span><br>
        <span>&Delta; = <?php echo $b * $b - 4 * $a * $c; ?></span><br><br>
        <?php $delta = $b * $b - 4 * $a * $c; ?>

        <?php if ($delta >= 0) { ?>
            <span>Formula de baskara: </span><br>
            <span>x = - b &plusmn; &radic;&Delta; / 2 . a</span><br>
            <span>x = - <?php echo  "($b)"; ?> &plusmn; &radic; <?php echo $delta; ?> / 2 . <?php echo $a; ?></span><br>
            <span>x = <?php echo -$b; ?> &plusmn; <?php echo sqrt($delta); ?> / <?php echo (2 * $a); ?></span><br><br>


            <span>x' = <?php echo -$b; ?> + <?php echo sqrt($delta); ?> / <?php echo (2 * $a); ?></span><br>
            <span>x' = <?php echo -$b + sqrt($delta); ?> / <?php echo (2 * $a); ?></span><br>
            <span>x' = <?php echo (-$b + sqrt($delta)) / (2 * $a); ?> </span><br><br>

            <span>x'' = <?php echo -$b; ?> - <?php echo sqrt($delta); ?> / <?php echo (2 * $a); ?></span><br>
            <span>x'' = <?php echo -$b - sqrt($delta); ?> / <?php echo (2 * $a); ?></span><br>
            <span>x'' = <?php echo (-$b - sqrt($delta)) / (2 * $a); ?> </span>
        <?php } else { ?>
            <?php echo "Delta negativo. Equação sem raiz."; ?>

        <?php } ?>
    <?php } elseif ($b == 0) { ?>
        <?php if ($c > 0) { ?>
            <span> <?php echo $a; ?>x² + <?php $c ?> = 0</span><br>
            <span> <?php echo $a; ?>x² = - <?php $c ?></span><br>
            <span> <?php echo $a; ?>x² = &radic;- <?php $c ?> </span><br>
            <span> <?php echo "Equação sem raiz"; ?> </span><br>
        <?php } else { ?>
            <span> <?php echo $a; ?>x² <?php echo $c; ?> = 0</span><br>
            <span> <?php echo $a; ?>x² = <?php echo -$c; ?></span><br>
            <span> x² = <?php echo -$c; ?>/<?php echo $a; ?></span><br>
            <span> x² = <?php echo -$c / $a; ?></span><br>
            <span> &radic;x² = &plusmn;&radic; <?php echo -$c / $a; ?> </span><br><br>

            <span> x' = <?php echo number_format(sqrt(-$c), 2, "."); ?> </span><br>
            <span> x'' = - <?php echo number_format(sqrt(-$c), 2, "."); ?> </span><br>
        <?php } ?>

    <?php } ?>
<?php } ?>

<?php

function fatorar()
{

    $num1 = preg_replace('/[^0-9-+.]/', "", $_POST['num1']);
    $i = 2;
    $expoentes = [];

    echo "$num1 "; ?>
    <br><br>
    <?php while ($i <= $num1) {
        if ($num1 % $i == 0) { ?>
            <span><?php echo "$i "; ?></span>
            <?php $num1 /= $i; ?>
            <?php array_push($expoentes, $i); ?>

    <?php } else {
            $i++;
        }
    } ?>
    <br><br>

    <?php
    $expoentes = array_count_values($expoentes);

    foreach ($expoentes as $base => $expoente) { ?>
        <span> <?php echo $base; ?><sup> <?php echo $expoente; ?> </sup> </span>
    <?php } ?>

<?php } ?>


<?php

function validar_cpf()
{

    //CPF Sem modificações para echo
    $cpf_ori = trim($_POST['cpf']);


    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/', "", trim($_POST['cpf']));


    // Verifica se foi informado onze dígitos e se foi informada uma sequência de dígitos repetidos. Ex: 111.111.111-11
    if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) { ?>
        <span>O CPF "<?php echo $cpf_ori; ?>" informado é inválido</span>
        <?php return false; ?>
    <?php  } ?>

    <?php
    // Faz o calculo para validar o CPF
    $number_quantity_to_loop = [9, 10];

    foreach ($number_quantity_to_loop as $item) {

        $sum = 0;
        $number_to_multiplicate = $item + 1;

        for ($index = 0; $index < $item; $index++) {

            $sum += $cpf[$index] * ($number_to_multiplicate--);
        }

        $result = (($sum * 10) % 11);

        if ($cpf[$item] != $result) { ?>
            <span>O CPF "<?php echo $cpf_ori; ?>" informado é inválido</span>
            <?php return false; ?>
    <?php
        }
    }
    ?>
    <span>O CPF "<?php echo $cpf_ori; ?>" informado é válido</span>
    <?php return true; ?>
<?php  } ?>