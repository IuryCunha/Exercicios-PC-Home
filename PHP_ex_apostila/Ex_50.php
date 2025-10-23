<?php

/* 50) Desenvolva um programa que faça o sorteio de 20 números entre 0 e 10 e 
mostre na tela: 
a) Quais foram os números sorteados 
b) Quantos números estão acima de 5 
c) Quantos números são divisíveis por 3 */  

$contador = 1;

$randMaior_5 = 0;
$randMenor_5 = 0;
$randIgual_5 = 0;
$randIgual_0 = 0;

$numDiv_3 = 0;

while ($contador <= 20) {
    $rand = rand(0,10);
    echo "Número sorteado " . $contador++ . " - " . $rand . PHP_EOL;
    
    if ($rand > 5) {
        $randMaior_5 = $randMaior_5 + 1;
    }
    if ($rand < 5) {
        $randMenor_5 = $randMenor_5 + 1;
    }
    if ($rand == 5) {
        $randIgual_5 = $randIgual_5 + 1;
    }
    if ($rand == 0) {
        $randIgual_0 = $randIgual_0 + 1;
    }

    if (is_int($rand / 3)) {
        $numDiv_3 = $numDiv_3 + 1;
    }
}
echo "" . PHP_EOL;
echo "Foram $randMaior_5 números sorteados maiores que 5" . PHP_EOL;
echo "" . PHP_EOL;

echo "Foram $randMenor_5 números sorteados menores que 5" . PHP_EOL;
echo "" . PHP_EOL;

echo "Foram $randIgual_5 números sorteados Iguais a 5" . PHP_EOL;
echo "" . PHP_EOL;

echo "Foram $randIgual_0 números sorteados Iguais a 0" . PHP_EOL;
echo "" . PHP_EOL;

echo "foram $numDiv_3 números sorteados divisíveis por 3" . PHP_EOL;