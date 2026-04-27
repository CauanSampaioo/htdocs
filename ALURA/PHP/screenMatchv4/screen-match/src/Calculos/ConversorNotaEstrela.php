<?php

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        // if ($nota >= 9) {
        //     return 5;
        // } elseif ($nota >= 7) {
        //     return 4;
        // } elseif ($nota >= 5) {
        //     return 3;
        // } elseif ($nota >= 3) {
        //     return 2;
        // } elseif ($nota >= 1) {
        //     return 1;
        // } else {
        //     return 0;
        // }

        $nota = $avaliavel->media();

        return round($nota) / 2;
    }
}