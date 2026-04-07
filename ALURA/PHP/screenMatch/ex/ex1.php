<?php
/*
1 - Escreva um programa em PHP que exiba seu nome na tela.

2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.

3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
*/


$nome = "Cauan Sampaio";
echo "Olá, meu nome é $nome!";


echo "\n\n__________\n\n";


$nota1 = 1;
$nota2 = 2;
$nota3 = 3;

$media = $nota1 + $nota2 + $nota3 / 3;
echo "A média das notas é: $media";


echo "\n\n__________\n\n";


$valorMetros = 10;

echo "Metros $valorMetros M \n";
$valorCentimetros = $valorMetros * 100;
echo "$valorMetros metros é igual a $valorCentimetros centímetros.";


echo "\n\n__________\n\n";


$ano = 2026;
if (($ano % 4 == 0) && ($ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "$ano é um ano bissexto.";
} else {
    echo "$ano não é um ano bissexto.";
}


echo "\n\n__________\n\n";


$celsius = 25;
$fahrenheit = ($celsius * 9 / 5) + 32;
echo "$celsius graus Celsius é igual a $fahrenheit graus Fahrenheit.";
?>