<?php

/*90) Desenvolva um algoritmo que leia dois valores pelo teclado e passe esses 
valores para um procedimento Somador() que vai calcular e mostrar a soma entre 
eles. */


$valores = []; // Cria um array vazio

for ($i = 0; $i < 2; $i++) {
    echo "Digite um valor: " . PHP_EOL;
    $valores[$i] = (int) readline(); // Lê dois números do usuário, guarda os números no array
}

function Somador($valores) { // Envia o array para a função
    $soma = $valores[0] + $valores[1]; // A função soma os valores
    echo "A soma dos valores é $soma" . PHP_EOL;
}

Somador($valores); // Mostra o resultado