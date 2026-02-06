<?php

/*  Crie uma função que receba 4 números como parâmetro(número, minimo, maximo, inclusivo) e retorne se o parâmetro número (O primeiro) está entre minimo e maximo. Quando o parâmetro inclusivo for true, tenha "entre" como inclusivo, ou seja, considerando se número é igual a mínimo ou a maximo. Caso o parâmetro inclusivo não seja informado, seu valor padrão deverá ser false, portanto, a lógica será exclusiva, não considerando se numero é igual a minimo ou a maximo.

exemplo:

estaEntre(10, 50, 100) // retornará true
estaEntre(16, 100, 160) // retornará false
estaEntre(3, 3, 150) // retornará false
estaEntre(3, 3, 150, true) // retornará true
*/

function estaEntre($numero, $minimo, $maximo, $inclusivo = false) {
    if ($inclusivo) {
        return $numero >= $minimo && $numero <= $maximo;
    } else {
        return $numero > $minimo && $numero < $maximo;
    }
}

$numero = (int) readline("Digite o numero a ser comparado: ");
$minimo = (int) readline("Digite o mínimo: ");
$maximo = (int) readline("Digite o máximo: ");

$resultado = estaEntre($numero, $minimo, $maximo);

echo $resultado ? "está dentro" : "está fora";