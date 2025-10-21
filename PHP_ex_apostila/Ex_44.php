<?php

echo "Digite o primeiro valor: ";
$primeiro = readline();
echo "Digite o ultimo valor: ";
$ultimo = readline();
echo "Digite o incremento: ";
$incremento = readline();

while ($primeiro < $ultimo) {
    echo "" . $primeiro  . PHP_EOL;
    $primeiro += $incremento;
}
echo "Acabou!";