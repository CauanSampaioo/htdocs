<?php

// Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function operacao(int $a, int $b, string $operacao): float {
    match ($operacao){
        '+' => $resultado = $a + $b,
        '-' => $resultado = $a - $b,
        '*' => $resultado = $a * $b,
        '/' => $resultado = $a / $b,
    };
    return $resultado;
}

var_dump(operacao(10, 5, '+'));