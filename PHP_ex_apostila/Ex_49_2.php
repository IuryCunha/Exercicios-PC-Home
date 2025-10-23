<?php

/*49) Crie um programa que leia 6 números inteiros e no final
mostre quantos deles são pares e quantos são ímpares.*/

$contador = 1;
$numPar = 0;
$numImpar = 0;

while ($contador <= 6) {

    echo "Digite o " . $contador . "° número: ";
    $numero = readline();
    $contador++;
    $numeroInt = intval($numero);
    
    if ($numeroInt % 2 == 0) {
        $numPar = $numPar + 1;
    }
    elseif ($numeroInt % 2 != 0) {
        $numImpar = $numImpar + 1;
    }

}
echo "Ao todo foram $numPar número(s) pare(s)" . PHP_EOL;
echo "Ao todo foram $numImpar número(s) ímpar(s)" ; 