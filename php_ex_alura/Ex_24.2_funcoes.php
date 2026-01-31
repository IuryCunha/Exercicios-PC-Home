<?php

function sacar(array $conta, float $ValorASacar): array 
{
    if ($ValorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor") . PHP_EOL;
    } else {
        $conta['saldo'] -= $ValorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) 
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
        return $conta;
    }
    else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}