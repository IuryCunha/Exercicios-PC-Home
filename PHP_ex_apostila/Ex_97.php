<?php

/* 97) Refaça o exercício 91, só que agora em forma de função Maior(), mas faça uma
adaptação que vai receber TRÊS números como parâmetro e vai retornar qual foi o
maior entre eles. */

function maior($a, $b, $c) {
   
    if ($a >= $b && $a >= $c) {
    return $a; 
    }
    elseif ($b >= $a && $b >= $c) {
    return $b;
    }
    elseif ($c >= $a && $c >= $b) {
    return $c;
    }
}

$valor1 = (float) readline("Digite o valor 1: ");
$valor2 = (float) readline("Digite o valor 2: ");
$valor3 = (float) readline("Digite o valor 3: ");

$maiorValor = maior($valor1, $valor2, $valor3);

echo "O maior valor é: $maiorValor";

/*
function maior($a, $b, $c) {
    return max($a, $b, $c);
}
*/
// maneira simplificada com função nativa.