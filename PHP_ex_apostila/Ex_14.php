<?php

/*14) A locadora de carros precisa da sua ajuda para cobrar seus serviços. Escreva
um programa que pergunte a quantidade de Km percorridos por um carro alugado e a
quantidade de dias pelos quais ele foi alugado. Calcule o preço total a pagar,
sabendo que o carro custa R$90 por dia e R$0,20 por Km rodado.
*/

echo "Km percorridos: ";
$Km_percorrido = fgets(STDIN);
echo "Dias alugados: ";
$dias = fgets(STDIN);

$taxa_dias = 90 * $dias;
$taxa_Km_p = 0.20 * $Km_percorrido;

$valor_final = $taxa_dias + $taxa_Km_p;

echo "Serão cobrados $taxa_dias R$ para $dias dia(s) alugado(s)" . PHP_EOL;
echo "Serão cobrados $taxa_Km_p R$ para $Km_percorrido km percorrido(s)" . PHP_EOL;

echo "O valor final será de $valor_final R$";