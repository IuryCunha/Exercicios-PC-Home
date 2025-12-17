<?php

function sacar($conta, $ValorASacar) {
    if ($ValorASacar > $conta['saldo']) {
    exibeMensagem("Você não pode sacar este valor") . PHP_EOL;
} else {
    $conta['saldo'] -= $ValorASacar;
}
return $conta;
}

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [

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

$contasCorrentes ['123.456.789-11'] = sacar($contasCorrentes ['123.456.789-11'], ValorASacar:500);
$contasCorrentes ['123.456.789-12'] = sacar($contasCorrentes ['123.456.789-12'], ValorASacar:500);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL) ;
}