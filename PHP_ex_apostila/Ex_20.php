<?php

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