<?php

class ContaBancaria
{

    public function __construct(protected float $saldo){
        
    }
    public function sacar($saque): void{
        if($saque < 0){
            echo "Adicione um valor posítivo";
        }
        $this->saldo -= $saque;
    }

    public function depositar($deposito): void{
        if($deposito < 0){
            echo "Deposite um valo rpositivo > 0 ";
        }
        $this->saldo += $deposito;  
    }

    public function consultarSalado(): float{
        return $this->saldo;
    }
}