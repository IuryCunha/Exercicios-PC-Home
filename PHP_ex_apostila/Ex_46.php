<?php

$contador = 6;
$soma = 0;

while ($contador <= 100) {
    echo "" . $contador . PHP_EOL;
    $contador += 2;
    $soma += $contador - 2;
}
echo "A soma dos números de 6 a 100 é: " . $soma;