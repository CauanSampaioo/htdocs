<?php

require __DIR__."/funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

mensagemLancamento($anoLancamento);

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluirNoPlano($planoPrime, $anoLancamento);
echo $incluidoNoPlano ? "Incluido no PLano\n" : "Não está incluso !\n";

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];


// echo $filme["ano"];
// echo "<pre>";
// var_dump($notas);
// sort($notas);
// var_dump($notas);
// echo "<pre>";

$posicao = strpos($filme['nome'], ':');
var_dump($posicao);
$extraiPosicao = substr($filme['nome'], 0, $posicao);
var_dump($extraiPosicao);