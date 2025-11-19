<?php

/*
80) Faça um algoritmo que preencha um vetor de 30 posições com números entre 1 e 
15 sorteados pelo computador. Depois disso, peça para o usuário digitar um 
número (chave) e seu programa deve mostrar em que posições essa chave foi 
encontrada. Mostre também quantas vezes a chave foi sorteada.*/

$vetoresRand = [];
$ChavePosi = [];
$quantiChaves = 0;

$Chave = (int) readline("Digite um número: ");

for ($i = 0; $i < 5; $i++) {

    $vetoresRand [$i] = rand(1,5);
    if ($Chave == $vetoresRand [$i])  {
        $ChavePosi [$i] = $vetoresRand [$i];
        $quantiChaves++;
    }
    
}

echo PHP_EOL;

echo "Numeros gerados: " . PHP_EOL;
foreach ($vetoresRand as $valor) {   
    echo $valor . " ";
}

echo PHP_EOL;

if ($quantiChaves != 0) {
echo "Posição do número encontrada: " . PHP_EOL;
foreach ($ChavePosi as $pos => $valor) {
    echo $pos . " -> " . $valor . PHP_EOL;
}
}
elseif ($quantiChaves == 0) {
    echo "";
}

echo PHP_EOL;

echo "foram encontradas $quantiChaves números";