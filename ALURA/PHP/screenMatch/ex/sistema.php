<?php

$saldo = 0;
function menu():void{
    echo "1 - Exibir saldo \n";
    echo "2 - Depositar \n";
    echo "3 - Sacar \n";
    echo "4 - Sair \n\n";
}

function exibirSaldo(float $saldo):void{
    echo "Saldo : $saldo\n";
}

function depositar(float &$saldo):float{
    echo "Valor do depósito : \n";
    $deposito = (float) fgets(STDIN);
    if($deposito > 0){
        $saldo += $deposito;
        echo "Depósito de $deposito realizado com sucesso! \n";
    }else{
        echo "Valor inválido! \n";
    }
    return $saldo;
}

function sacar(float &$saldo):float{
    echo "Valor do saque : \n";
    $saque = (float) fgets(STDIN);
    if($saque > 0 && $saque <= $saldo){
        $saldo -= $saque;
        echo "Saque de $saque realizado com sucesso! \n";
    }else{
        echo "Valor inválido ou saldo insuficiente! \n";
    }
    return $saldo;
}



do{
echo menu();


echo "Digite uma opção _";
$opcao = fgets(STDIN);


switch ($opcao) {
    case 1:
        exibirSaldo($saldo);
        break;
    case 2:
        depositar($saldo);
        break;
    case 3:        
        sacar($saldo);
        break;
    case 4:
        echo "Saindo... \n";
        break;
    default:
        echo "Opção inválida! \n";
}
}while($opcao != 4);