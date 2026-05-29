<?php

/*12) Crie um programa que leia o preço de um produto, calcule e mostre o seu
PREÇO PROMOCIONAL, com 5% de desconto.*/


echo "Qual o preço do produto? ";

$valor_produto = fgets(STDIN);

$porcentagem = 5;

$desconto = ($valor_produto * $porcentagem) / 100;
$valor_final = $valor_produto - $desconto;

echo "O valor do produto de $valor_produto R$ passa a ser com 5% de desconto: $valor_final R$";


