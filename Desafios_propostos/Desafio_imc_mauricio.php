<?php

echo "Peso: ";
$peso = fgets(STDIN);
echo "Altura: ";
$altura = fgets(STDIN);

$IMC = $peso / ($altura ** 2) ;
$IMCformat =  number_format($IMC , 2 . '');
var_dump($IMC);

echo "Seu IMC é de: $IMCformat " . "\n";

if ($IMC < 18.5) {
    echo "Você está abaixo do peso";
}

elseif ($IMC >= 18.5 and $IMC < 25) {
    echo "Voce está no peso ideal";
}

elseif ($IMC >= 25 and $IMC < 30) {
    echo "Você está com sobrepeso";
}

elseif ($IMC >= 30 and $IMC < 35) {
    echo "Você está com obesidade Moderada";
}

elseif ($IMC >= 35 and $IMC < 40) {
    echo "Você está com obesidade Severa";
}

elseif ($IMC >= 40) {
    echo "Você está com obseidade Mórbida";
}

// nice
