<?php

/* 44) Crie um algoritmo que leia o valor inicial da contagem, o valor final e o
incremento, mostrando em seguida todos os valores no intervalo:
Ex: Digite o primeiro Valor: 3
Digite o último Valor: 10
Digite o incremento: 2
Contagem: 3 5 7 9 Acabou! */

echo "Digite o primeiro valor: ";
$primeiro = readline();
echo "Digite o ultimo valor: ";
$ultimo = readline();
echo "Digite o incremento: ";
$incremento = readline();

while ($primeiro <= $ultimo) {
    echo $primeiro  . PHP_EOL;
    $primeiro += $incremento;
}
echo "Acabou!";