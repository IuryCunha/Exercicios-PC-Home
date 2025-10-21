<?php
echo "tende advinhar um numero de 1 a 5: ";
$n = readline();
$na = rand(1,5);


if ($n != 1 && $n != 2 && $n != 3 && $n != 4 && $n != 5) {
    echo "Por favor, coloque um numero de 1 a 5";
}
elseif ($n == $na) {
    echo "O numero sorteado foi: $na" . PHP_EOL;
    echo "Você acertou!";
}
else {
    echo "O numero sorteado foi: $na" . PHP_EOL;
    echo "Você errou";
}