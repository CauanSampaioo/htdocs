<?php

$filmes = [    
    "nome" => $_POST["nome"],
    "ano" => $_POST["ano"],
    "nota" => $_POST["nota"],
    "genero" => $_POST["genero"]
];

//var_dump($filmes);

file_put_contents("arquivo.json", "\n".json_encode($filmes), FILE_APPEND);

//file_put_contents(__DIR__ . "/arquivoLeitura.json","\ncom put get contents", FILE_APPEND);

header('location: sucesso.php?filme=' . $filmes['nome']);