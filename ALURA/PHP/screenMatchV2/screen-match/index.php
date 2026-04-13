<?php

require __DIR__."/src/funcoes.php";

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

$filme = criaFilme(
    "Thor: Ragnarok",
    2021,
    7.8,
    "super-herói",
);

//var_dump($filme);


// echo $filme["ano"];
// echo "<pre>";
// var_dump($notas);
// sort($notas);
// var_dump($notas);
// echo "<pre>";

// $posicao = strpos($filme['nome'], ':');
// var_dump($posicao);
// $extraiPosicao = substr($filme['nome'], 0, $posicao);
// var_dump($extraiPosicao);

// echo "\n\n";
// $json = json_encode($filme);
// echo $json;
// echo "\n\n";

// echo "\n\n";
// $json = json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}', true);
// print_r( $json);
// echo "\n\n";

// $filmeComStringJson = json_encode($filme);
// file_put_contents(__DIR__ . '/formatoJson.json', $filmeComStringJson);

// $formatoTxt = file_get_contents(__DIR__ . '/formatoJson.txt');
// var_dump(json_decode($formatoTxt, 1));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exportador do ScreenMatch</h1>
<form action="exportaArquivo.php" method="post">
    <fieldset>
        <label for="nome">Nome:</label> <br>
        <input type="text" name="nome" id="nome" required>
    </fieldset>

    <fieldset>
        <label for="ano">Ano de lançamento:</label> <br>
        <input type="year" name="ano" id="ano" required>
    </fieldset>

    <fieldset>
        <label for="nome">Nota:</label> <br>
        <input type="number" name="nota" id="nota" required step="0.5">
    </fieldset>

    <fieldset>
        <label for="nome">Gênero:</label> <br>
        <select name="genero" id="genero">
            <option value="super-heroi">Super-herói</option>
            <option value="comedia">Comédia</option>
            <option value="acao">Ação</option>
        </select>
    </fieldset>

    <br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
</body>
</html>