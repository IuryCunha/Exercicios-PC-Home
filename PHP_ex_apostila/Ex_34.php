<?php

echo "Altura: ";
$alt = readline();
echo "Peso: ";
$peso = readline();

$imc = $peso / ($alt ** 2);
var_dump($imc);

if ($imc < 18.5) {
    echo "Abaixo do peso";
}
elseif ($imc <= 25) {
    echo "Peso ideal";
}
elseif ($imc <=30) {
    echo "Sobrepeso";
}
elseif ($imc <= 40) {
    echo "Obesidade";
}
else {
    echo "Obseidade mórbida";
}