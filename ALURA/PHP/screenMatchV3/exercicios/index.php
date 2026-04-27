<?php

require_once __DIR__ . "/ContaBancaria.php";
require_once __DIR__ . "/ContaCorrente.php";

$corrente = new ContaCorrente(100.01);
echo $corrente->consultarSalado() . "<br><hr>";
$corrente->depositar(50.05);
echo $corrente->consultarSalado() . "<br><hr>";
$corrente->sacar(70.99);
echo $corrente->consultarSalado() . "<br><hr>";