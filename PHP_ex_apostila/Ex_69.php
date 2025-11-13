<?php 

/*69) [DESAFIO] Desenvolva um programa que leia o primeiro termo e a razão de uma 
PA (Progressão Aritmética), mostrando na tela os 10 primeiros elementos da PA e 
a soma entre todos os valores da sequência.*/

$soma = 0;

$Ptermo = (int) readline("Digite o primeiro termo: ");

$razao = (int) readline("Digite a razão: ");

for ($contador = 1; $contador <= 10; $contador++) {
    
    $termo = $Ptermo + ($contador - 1) * $razao;
    echo "$termo" . PHP_EOL;
    $soma += $termo;
}
echo "A soma dos 10 primeiros termos é: $soma";