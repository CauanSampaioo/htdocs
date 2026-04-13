<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vindo ao Screen-Match\n";

$filme = new Filme("Thor: Ragnarok", 2021, 7.8, "super-herói");
print_r($filme);
