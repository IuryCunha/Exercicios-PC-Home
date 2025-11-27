<?php

/*83) [DESAFIO] Crie uma lógica que preencha um vetor de 20 posições com números 
aleatórios (entre 0 e 99) gerados pelo computador. Logo em seguida, mostre os 
números gerados e depois coloque o vetor em ordem crescente, mostrando no final 
os valores ordenados. */

$vetores = [];
$vetorOrdena = [];

for ($i = 0; $i < 5; $i++) {
    $vetores [$i] = rand(1,7);
}

echo "Valores aleatórios: ";
foreach ($vetores as $valor) {
    echo $valor . " ";
}
echo PHP_EOL;

sort($vetores);
echo "Valores ordenados: ";
foreach ($vetores as $valorOrdena) {
    echo $valorOrdena . " ";
}