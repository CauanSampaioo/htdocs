<?php


class ContaCorrente extends ContaBancaria
{
    public function __construct(protected float $saldo){
        parent::__construct($saldo);
    }

}