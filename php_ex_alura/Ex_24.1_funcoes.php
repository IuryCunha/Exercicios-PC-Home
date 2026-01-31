<?php

/*
 include 'Ex_24.2_funcoes.php'; >> inclui um arquivo fora deste arquivo
 require 'Ex_24.2_funcoes.php'; >> caso apresentar erro irá informar logo no require, diferente do inclue que executa o resto do código
 require_once ou include_once >> verifica se o arquivo ja foi incluido, caso ja esteja incluido ele não executará
*/

/* notificacoes do php
notice >> mostra algo no codigo mas consegue executar normalmente
warning >> identifica um erro no codigo mas consegue executar o resto
error >> identifica um grave erro no codigo, não consegue executar o resto do codigo
*/

require_once 'Ex_24.2_funcoes.php';

$contasCorrentes = [

    '123.456.789-10' => [
    'titular' => 'Vinicius', 
    'saldo' => 100
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
$contasCorrentes ['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], valorADepositar:900);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf  {$conta['titular']} {$conta['saldo']}"
    );
}