<?php

$arquivo = fopen(__DIR__ ."/arquivoLeitura.json", "r");
//var_dump($arquivo);

$primeiraLinha = fgets($arquivo);
print_r($primeiraLinha);

fclose($arquivo);