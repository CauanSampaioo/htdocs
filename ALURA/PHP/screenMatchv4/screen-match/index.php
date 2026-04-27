<?php

require __DIR__ . "/src/Modelo/Avaliavel.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Episodio.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";
require __DIR__ . "/src/Calculos/ConversorNotaEstrela.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie(
    'Lost', 
    2007, 
    Genero::Drama, 
    10, 
    20, 
    30
);

$serie->avalia(10);
$serie->avalia(5);
$serie->avalia(10);
$episodio1 = new Episodio($serie, 1, 50);
$episodio1->avalia(10);
$episodio1->avalia(3);
$episodio1->avalia(6);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

$coverteEmEstrelas = new ConversorNotaEstrela();
echo "Estrelas ".$coverteEmEstrelas->converte($episodio1) . "\n"; 

echo "Média = " . $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";
