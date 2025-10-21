<?php

echo "Digite um valor: ";
$entrada = readline();
var_dump($entrada);
$numero = intval($entrada);
var_dump($numero);

$contador = 1;

if($numero > 0) {
    if ($numero == $entrada) {
    while ($contador <= $numero) {
        echo "" . $contador++ . PHP_EOL; 
    }
    echo "Acabou";
    }
    elseif ($numero != $entrada) {
        echo "Digite um numero inteiro para continuar!";
    }
}
else {
    echo "Digite um numero positivo para continuar!";
}