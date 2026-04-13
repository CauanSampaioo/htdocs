<?php

//Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.
$frase = "tradicional com f_open, funcionou !";
$arquivo = fopen(__DIR__ . "/arquivoLeitura.json","a");
fwrite($arquivo,"\n{".json_encode("$frase")."}");
fclose($arquivo);

// file_put_contents(__DIR__ . "/arquivoLeitura.json","\ncom put get contents", FILE_APPEND);