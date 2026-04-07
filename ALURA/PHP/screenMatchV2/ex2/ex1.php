<?php

//Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$notas = [2, 5, 10, 3, 6, 8, ];
sort($notas);
$tamanhoArray = count($notas);

echo "\n for \n\n";

for($i = $tamanhoArray - 1 ; $i >= 3; $i--){
    echo $notas[$i] . "\t";
}

echo "\n\n função \n\n";
function maioresNotas(array $notas){
    rsort($notas);
    return array_slice($notas, 0 , 3);
}
$resultado = maioresNotas($notas);
foreach ($resultado as $key) {
    echo $key . "\t";
}