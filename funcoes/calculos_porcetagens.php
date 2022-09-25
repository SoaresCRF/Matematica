<?php
function calcular1()
{
    $porcento = preg_replace('/[^0-9]/', "", $_POST['porcento']);
    $valor = preg_replace('/[^0-9]/', "", $_POST['valor']);
    echo $porcento . "% de $valor = " . $porcento / 100 * $valor;
}


function calcular2()
{
    $valor1 = preg_replace('/[^0-9]/', "", $_POST['valor1']);
    $valor2 = preg_replace('/[^0-9]/', "", $_POST['valor2']);
    echo $valor1 . " de $valor2 = " . $valor1 * $valor2 / 100 . "%";
}


function calcular3()
{
    $valor_inicial = preg_replace('/[^0-9]/', "", $_POST['valor_inicial']);
    $valor_final = preg_replace('/[^0-9]/', "", $_POST['valor_final']);
    echo $valor_inicial . " aumentou para $valor_final teve um aumento de " . $valor_final / $valor_inicial * 100 - 100 . "%";
}


function calcular4()
{
    $valor_inicial2 = preg_replace('/[^0-9]/', "", $_POST['valor_inicial2']);
    $valor_final2 = preg_replace('/[^0-9]/', "", $_POST['valor_final2']);
    echo $valor_inicial2 . " diminuiu para $valor_final2 teve uma diminuição de " . ($valor_final2 - $valor_inicial2) / $valor_inicial2 * 100 . "%";
}