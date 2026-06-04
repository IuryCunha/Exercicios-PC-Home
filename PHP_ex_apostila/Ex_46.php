<?php

/* 46) Crie um programa que calcule e mostre na tela o resultado da soma entre 6 +
8 + 10 + 12 + 14 + ... + 98 + 100. */

$contador = 6;
$soma = 0;

while ($contador <= 100) {
    echo $contador . PHP_EOL; // Exibe o valor atual do contador
    $soma += $contador;    // Adiciona o valor do contador à soma
    $contador += 2;      // Incrementa o contador em 2 para obter os próximos números pares
}
echo "A soma dos números de 6 a 100 é: " . $soma;