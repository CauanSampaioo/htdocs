<?php

//Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

function ordenarString(array $array): array{
    sort ($array);
    return $array;
}

function imprimir(array $oredenada): string{
    $imprime = "";
    foreach($oredenada as $key){
        $imprime .= $key . "\n";
    }
    return $imprime;
}

$array = array ('laranja', 'limão', 'banana');
$oredenada = ordenarString($array);
echo imprimir($oredenada);
