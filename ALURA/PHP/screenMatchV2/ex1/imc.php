<?php

//Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

function calculoImc(float $peso, float $altura): float {
    return $peso / ($altura * $altura);
}

function imc(float $peso, float $altura): string {
    $result = calculoImc($peso, $altura);
    $classificacao = '';
    if($result < 18.5){
        $classificacao ="Abaixo do peso";
    } elseif($result <= 24.9){
        $classificacao = "Peso normal";
    } else {
        $classificacao = "Acima do peso";
    }
    return "O IMC é:" . number_format($result,1) . " - Classificação: $classificacao";
}

$peso = 75;
$altura = 1.74;
echo imc($peso, $altura);