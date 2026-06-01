<?php

/*20) Desenvolva um programa que leia um número inteiro e mostre se ele é PAR ou
ÍMPAR.*/

echo "digite um numero: ";
$numero = fgets(STDIN);

$numeroIP = $numero % 2;

var_dump($numeroIP);

if ( $numeroIP == 0 ) {
    echo "O numero $numero é par";
}
else {
    echo "O numero $numero é impar";
}