<?php

/* 22) Escreva um programa que leia o ano de nascimento de um rapaz e mostre a sua
situação em relação ao alistamento militar.
 - Se estiver antes dos 18 anos, mostre em quantos anos faltam para o
alistamento.
 - Se já tiver depois dos 18 anos, mostre quantos anos já se passaram do
alistamento. */

echo "Ano de nascimento: ";
$ano_nasc = fgets(STDIN);
echo "Ano atual: ";
$ano_atual = fgets(STDIN);

$idade = $ano_atual - $ano_nasc;

echo "Sua idade é $idade anos" . "\n";

if ($idade < 18) {
    $anos_restantes = 18 - $idade;
    echo "Faltam $anos_restantes anos para você alistar-se";
}
elseif ($idade >= 18) {
    $anos_passados = $idade - 18; 
    echo "Já se passaram $anos_passados anos de seu alistamento";
}