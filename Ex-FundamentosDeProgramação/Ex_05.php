<?php

/* Crie uma função que receba 2 números e retorne se o primeiro é maior ou igual ao segundo
*/

function MaiorOuMenor($numero1, $numero2) 
{

    return $numero1 >= $numero2;
    
}

$numero1 = (int) readline("Digite o primeiro número: ");
$numero2 = (int) readline("Digite o segundo número: ");

$resultado = MaiorOuMenor($numero1, $numero2);

if ($resultado) {
    echo "O primeiro número é maior ou igual ao segundo.";
} else {
    echo "O primeiro número é menor que o segundo.";
}

/* 
O PHP imprime:
1 → se for true
nada → se for false
*/