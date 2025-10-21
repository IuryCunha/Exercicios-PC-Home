<?php

echo "tende advinhar um numero de 1 a 5: ";
$n = readline();
$na = rand(1,5);

if ($n > 0 && $n <= 5 && $n == $na) {
    echo "O numero sorteado foi: $na" . PHP_EOL;
    echo "Você acertou!";
}
elseif ($n > 5) {
    echo "Por favor, coloque um numero de 1 a 5";
}
else {
    echo "O numero sorteado foi: $na" . PHP_EOL;
    echo "Você errou";
}