<?php

/* 9) Faça um algoritmo que leia quanto dinheiro uma pessoa tem na carteira (em R$)
e mostre quantos dólares ela pode comprar. Considere US$1,00 = R$3,45. */

echo "Quanto dinheiro você tem na carteira? " . PHP_EOL;
$real = (float) fgets(STDIN);

echo "Você possui $real R$" . PHP_EOL;

$cotacao = 3.45;
$dollar = $real / $cotacao; 
$dollarFormatado = number_format($dollar, 2, ',', '.');
echo "Você pode comprar $dollarFormatado U$ com $real R$";