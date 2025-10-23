<?php

$contador = 500;

$soma = 0;

while ($contador >= 0) {
    echo "" . $contador . PHP_EOL;
    $soma += $contador;
    $contador -= 50;
}
echo "A soma de 50 em 50, de 500 até 0 é: $soma";