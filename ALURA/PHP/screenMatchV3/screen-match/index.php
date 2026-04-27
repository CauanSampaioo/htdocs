<?php

require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Genero.php";


$nome = "Cauan: Ragnarok";
$anoLancamento = 2021;
$nota = 7.8;
$genero = "super-herói";    

$filme = new Filme( 
    $nome, 
    $anoLancamento, 
    Genero::SuperHeroi,
    180
);

echo "<pre>";
var_dump($filme);   
echo "Média - " . $filme->media();
echo "</pre>";


$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(8);
$filme->avalia(2);

echo "<pre>";
var_dump($filme);   
echo "Média - " . $filme->media();
echo "</pre>";

/////////////////////////////////
echo "<br><hr><br>";

$serie = new Serie( 
    $nome, 
    $anoLancamento, 
    Genero::SuperHeroi,
    2,
    10,
    20
);

echo "<pre>";
var_dump($serie);   
echo "Média - " . $serie->media();
echo "</pre>";


$serie->avalia(100);
$serie->avalia(6);
$serie->avalia(8);
$serie->avalia(2);

echo "<pre>";
var_dump($serie);   
echo "Média - " . $serie->media();
echo "</pre>";