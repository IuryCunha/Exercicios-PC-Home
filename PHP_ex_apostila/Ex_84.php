<?php

/*84) Crie um programa que leia o nome e a idade de 9 pessoas e guarde esses 
valores em dois vetores, em posições relacionadas. No final, mostre uma listagem 
contendo apenas os dados das pessoas menores de idade.*/

$vetoresNome = [];
$vetoresIdade = [];

for ($i = 1; $i <= 3; $i++) {
    $vetoresNome [$i] = readline("Digite o nome: ");
    $vetoresIdade [$i] = (int) readline("Digite a idade: ");


}

echo "Nomes: ";

if ($vetoresIdade [$i] < 18) {

    foreach ($vetoresNome as $nome) {
    echo $nome . ", ";
    }
}
echo PHP_EOL;

echo "Idades: ";

if ($vetoresIdade [$i] < 18) {
    foreach ($vetoresIdade as $idade) {
        echo $idade . ", "; 
    }
}