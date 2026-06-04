<?php

/* 47) Desenvolva um aplicativo que mostre na tela o resultado da expressão 500 +
450 + 400 + 350 + 300 + ... + 50 + 0 */

$contador = 500;

$soma = 0;
    
while ($contador >= 0) {
    echo $contador . PHP_EOL; // Exibe o valor atual do contador
    $soma += $contador;   // Adiciona o valor do contador à soma
    $contador -= 50;     // Decrementa o contador em 50 para obter os próximos números
}
echo "A soma de 50 em 50, de 500 até 0 é: $soma";