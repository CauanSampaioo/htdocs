<?php

class Filme{
    public string $nome;
    public int $anoLancamento;
    public float $nota;
    public string $genero;

    public function __construct($nome,$anoLancamento,$nota,$genero){
        $this->nome = $nome;
        $this->anoLancamento = $anoLancamento;
        $this->nota = $nota;
        $this->genero = $genero;
    }
}