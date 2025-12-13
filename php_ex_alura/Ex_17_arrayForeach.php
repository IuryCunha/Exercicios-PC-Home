<?php

$contasCorrentes = [
    /* O php por baixo dos panos automaticamente
    associa os indices
    indice 0 => $conta1
    indice 1 => $conta2
    indice 2 => $conta3 */

    12345678910 => [
    'titular' => 'Vinicius', 
    'saldo' => 1000
    ], 
    12345678911 => [
    'titular' => 'Maria',
    'saldo' => 10000
    ], 
    12345678912 => [
    'titular' => 'Alberto',
    'saldo' => 300
]

];
    // foreach consegue carregar mais opçoes alem do for que carrega indices

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}