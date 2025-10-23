<?php

$contador = 1;
$soma = 0;

while ($contador <= 7) {
    
    echo "Digite o " . $contador . "° número: ";
    $numero = readline();
    $contador++;
    $numeroInt = intval($numero);
    $soma = $soma += $numeroInt;

}
echo "A soma dos numeros é: $soma";