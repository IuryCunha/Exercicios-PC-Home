<?php

/*11) Desenvolva uma lógica que leia os valores de A, B e C de uma equação do
segundo grau e mostre o valor de Delta.*/

$A = 1;
$B = -3;
$C = 2;

$Delta = $B ** 2 - 4 * $A * $C;

$x = (-1 * $B + sqrt($Delta)) / 2 * $A;
$xx = (-1 * $B - sqrt($Delta))/ 2 * $A;

echo "O valor de delta é $Delta" . PHP_EOL;

echo "As raizes de delta $Delta são $x e $xx";