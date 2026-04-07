<?php

//Crie uma função em PHP que converta graus celsius para Fahrenheit.

function converte(float $celcius): float{
    return ($celcius * 1.8) + 32;
}

$temperaturaCelcius = 39;
echo "$temperaturaCelcius C° convertido para F° é = " . converte($temperaturaCelcius) . " F°";