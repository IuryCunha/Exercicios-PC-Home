<?php

/* 42) Faça um algoritmo que pergunte ao usuário um número inteiro e positivo
qualquer e mostre uma contagem até esse valor:
Ex: Digite um valor: 35
Contagem: 1 2 3 4 5 6 7 ... 33 34 35 Acabou! */

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