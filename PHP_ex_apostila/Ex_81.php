<?php

/* 
81) Crie um programa que leia a idade de 8 pessoas e guarde-as em um vetor. No 
final, mostre: 
a) Qual é a média de idade das pessoas cadastradas 
b) Em quais posições temos pessoas com mais de 25 anos 
c) Qual foi a maior idade digitada (podem haver repetições) 
d) Em que posições digitamos a maior idade */

$vetores = [];
$soma = 0;
$posi25a = [];
$maiorIdade = [];

for ($i = 0; $i < 3; $i++) {

    $vetores [$i] = (int) readline("Digite a idade: "); 

    $soma = $soma += $vetores [$i];
    $media = $soma / 3;

    if ($vetores [$i] > 25) {
        $posi25a [] = $i;
    }
    if ($i == 0) {
        $maiorIdade [] = $i;
    }
    if ($vetores [$i] > $maiorIdade [$i]) {
        $maiorIdade [$i] = $vetores [$i];
    }


}
echo "Idades digitadas: ";
foreach ($vetores as $valor) {
    echo $valor . " ";
}
echo PHP_EOL;

echo "A soma das idades é $soma" . PHP_EOL;
echo "A media das idades é $media" . PHP_EOL;

echo PHP_EOL;

foreach ($posi25a as $pos) {
    echo "Posição de maior de 25 anos $pos" . PHP_EOL;
}
echo PHP_EOL;
foreach ($maiorIdade as $posM) {
    echo "Posição de maior idade $posM" . PHP_EOL;
}