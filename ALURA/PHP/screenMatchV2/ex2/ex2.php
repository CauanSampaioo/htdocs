<?php

//Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.

$nome = 'Vinicius Dias,1997,Programador';

$array = explode(',', $nome);

foreach($array as $string){
    echo "$string \n";
}