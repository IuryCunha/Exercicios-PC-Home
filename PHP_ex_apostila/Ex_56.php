<?php

/*56) Crie um programa que leia vários números pelo teclado e mostre no final o
somatório entre eles.
Obs: O programa será interrompido quando o número 1111 for digitado*/

$flag = true;
$contador = 1;
$soma = 0;
$obteveBreak = false;

echo "Soma de 5 números: " . PHP_EOL;

while ($flag == true && $contador <= 5) {
    echo $contador++ . "° Número: " . PHP_EOL;
    $num = fgets(STDIN);

    if (is_numeric($num)) {

        $soma = $soma += $num;

        if ($num == 1111) {
            $flag = false;
            echo "Este número é proíbido, reinicie o programa." . PHP_EOL;
        }
    }
    else {
        $obteveBreak = true;
        break;
    }
}
if ($obteveBreak == false) {
    
    if ($flag == true) {
        echo "Soma dos números: $soma";
    }
}
else {
    echo "Informação inválida, reinicie o programa.";
}