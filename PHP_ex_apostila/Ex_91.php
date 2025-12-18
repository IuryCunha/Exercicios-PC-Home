<?php

/*91) Desenvolva um algoritmo que leia dois valores pelo teclado e passe esses 
valores para um procedimento Maior() que vai verificar qual deles é o maior e 
mostrá-lo na tela. Caso os dois valores sejam iguais, mostrar uma mensagem 
informando essa característica. */

$valores = []; // Cria um array vazio

for ($i = 0; $i < 2; $i++) {
    echo "Digite um valor: " . PHP_EOL;
    $valores[$i] = (int) readline(); // Lê dois números do usuário, guarda os números no array
}

function Maior($valores) {
    if ($valores [0] > $valores [1]) {
        $maior = $valores [0];
        echo "O maior valor é $maior";
    }
    elseif ($valores [0] < $valores [1]) {
        $maior = $valores [1];
        echo "O maior valor é $maior";
    }
    else {
        echo "Os dois valores são iguais";
    }
}

Maior($valores);