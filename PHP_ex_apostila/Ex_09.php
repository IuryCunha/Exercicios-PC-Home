<?php

$real = 10;

echo "Você possui 10 R$" . PHP_EOL;

$cotacao = 4.5;
$dollar = $real / $cotacao; 
$dollarFormatado = number_format($dollar, 2 . '');
echo "Você pode comprar $dollarFormatado U$ com $real R$";