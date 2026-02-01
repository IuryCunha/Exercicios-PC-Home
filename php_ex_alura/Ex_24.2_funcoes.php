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

function TitularComLetrasMaiusculas(array &$conta) // O "&" neste caso informa que está recebendo uma referencia, a conta em si e não uma cópia dela.
{
    $conta ['titular'] = strtoupper($conta['titular']); 
}

// sem o "&" estaria passando apenas o valor copiado, mas com o "&" passa a referência, fazendo com que o original seja modificado
// passagem por referência pode ajudar porem pode apresentar problemas devido ao acessso liberado da variável