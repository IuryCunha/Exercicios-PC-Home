<?php

$contasCorrentes = [
    /* O php por baixo dos panos automaticamente
    associa os indices
    indice 0 => $conta1
    indice 1 => $conta2
    indice 2 => $conta3 */

    '123.456.789-10' => [
    'titular' => 'Vinicius', 
    'saldo' => 1000
    ], 
    '123.456.789-11' => [
    'titular' => 'Maria',
    'saldo' => 10000
    ], 
    '123.456.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

$contasCorrentes ['123.456.789-13'] = [ 
    'titular' => 'Claudia',
    'saldo' => 2000
];

    // foreach consegue carregar mais opçoes alem do for que carrega indices

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

/* se voce tiver um array associativo
onde as chaves tem algum significado, sempre que voce for adicionar 
um novo item, voce precisa dessa chave*/