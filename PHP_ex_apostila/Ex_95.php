<?php

/* 95) Refaça o exercício 90, só que agora em forma de função Somador(), que vai
receber dois parâmetros e vai retornar o resultado da soma entre eles para o
programa principal.*/ 

$valores = []; 

for ($i = 0; $i < 2; $i++) { // Laço for para ler os valores
    echo "Digite um valor: " . PHP_EOL;
    $valores[$i] = (int) readline();
}

function somador($a, $b) { // Criação da função somador
    return $a + $b;
}

$resultado = somador($valores[0],  $valores[1]); // Chamada da função
echo "a soma é $resultado" . PHP_EOL; // Exibição do resultado