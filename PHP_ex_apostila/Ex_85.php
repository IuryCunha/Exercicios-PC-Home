<?php

/*85) Faça um algoritmo que leia o nome, o sexo e o salário de 5 funcionários e 
guarde esses dados em três vetores. No final, mostre uma listagem contendo 
apenas os dados das funcionárias mulheres que ganham mais de R$5 mil. */

$nomes = [];
$sexos = [];
$salarios = [];

for ($i = 0; $i < 5; $i++) {
    $nomes [$i] = readline("Digite o nome " . ($i+1) . ": ");
    $sexos [$i] = (int) readline("Digite o sexo (1) masculino e (2) feminino: ");
    $salarios [$i] = (int) readline("Digite o salário " . ($i+1) . "R$: ");
}

echo "LISTAGEM: " . PHP_EOL;

for ($i = 0; $i < 5; $i++) {
    if ($sexos [$i] == 2 && $salarios [$i] > 5000) {
        echo "Nome: {$nomes [$i]}, Salário: {$salarios [$i]} R$" . PHP_EOL;
    }
}