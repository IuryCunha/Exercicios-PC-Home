<?php

/*79) Desenvolva um programa que leia 10 números inteiros e guarde-os em um vetor. 
No final, mostre quais são os números pares que foram digitados e em que 
posições eles estão armazenados.*/

$vetores = [];
$vetorPar = [];

for ($i = 1; $i <= 5; $i++) {
    $vetores [$i] = (int) readline("Digite um numero: ");

    if ($vetores [$i] % 2 == 0) {
        $vetorPar [$i] = $vetores [$i];
    }
}

echo PHP_EOL;

echo "Numeros digitados: " . PHP_EOL;
foreach ($vetores as $valor) {
    echo $valor . " ";
}

echo PHP_EOL;

echo "Posição par " . PHP_EOL;
foreach ($vetorPar as $mult => $valor) {
    echo $mult . " -> " . $valor . PHP_EOL;
}