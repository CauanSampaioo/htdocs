<?php

/*
Defina variáveis com informações sobre o filme, como nome, ano de lançamento, nota e se ele está incluído no plano.
Realize operações como soma e divisão para, com várias notas, chegar a uma média.
Utilize operadores lógicos para definir se o filme está incluído no plano.
Utilize de concatenação e interpolação de strings para formatar a exibição dos dados do filme.
*/

/*
Exiba uma mensagem informando se o filme é lançamento ou não, dependendo do ano.
Crie uma variável a partir de uma expressão condicional definindo o gênero do filme a partir de seu nome.
Faça um loop nas notas recebidas pela linha de comando para somá-las e depois calcular a média.
*/

$nomeFilme = 'To Gun - Maverick';
$anoLancamento = 2008;
$nota = $argv();
$incluidoNoPlano = 1;

if ($anoLancamento >= 2026) {
    echo "O filme é lançamento !";
} elseif ($anoLancamento >= 2020) {
    echo "O filme já tem um tempo.";
} else {
    echo "O filme é antigo.";
}

echo "\n\n__________\n\n";

$genero = match ($nomeFilme) {
    'To Gun - Maverick' => 'Ação',
    'O Poderoso Chefão' => 'Drama',
    'A Origem' => 'Ficção Científica',
    default => 'Gênero desconhecido',
};

echo "Gênero do filme: $genero";