<?php

/* 45) O programa acima vai ter um problema quando digitarmos o primeiro valor
maior que o último. Resolva esse problema com um código que funcione em qualquer
situação. */

$primeiro = readline("Digite o primeiro valor: ");
$ultimo = readline("Digite o ultimo valor: ");
$incremento = readline("Digite o incremento: ");

if ($incremento <= 0) {
    exit("Erro: incremento inválido!");
}

if ($primeiro <= $ultimo) { 
    while ($primeiro <= $ultimo) {
        echo $primeiro  . PHP_EOL;
        $primeiro += $incremento;
    }
    echo "Acabou!";
}
else {
    while ($primeiro >= $ultimo) {
        echo $primeiro  . PHP_EOL;
        $primeiro -= $incremento;
    }
    echo "Acabou!";
}