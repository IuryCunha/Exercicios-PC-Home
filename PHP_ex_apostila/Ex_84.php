<?php

/*84) Crie um programa que leia o nome e a idade de 9 pessoas e guarde esses 
valores em dois vetores, em posições relacionadas. No final, mostre uma listagem 
contendo apenas os dados das pessoas menores de idade.*/

$vetoresNome = [];
$vetoresIdade = [];

for ($i = 0; $i < 3; $i++) {
    $vetoresNome [$i] = readline("Digite o nome " . ($i+1) . ": ");
    $vetoresIdade [$i] = (int) readline("Digite a idade: ");
}

echo "Nomes: " . PHP_EOL;

for ($i = 0; $i < 3; $i++) {
    if ($vetoresIdade[$i] < 18) {
        echo "Nome: $vetoresNome[$i], Idade: $vetoresIdade[$i]" . PHP_EOL;
    }
}