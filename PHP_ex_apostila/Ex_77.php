<?php

/*77) Faça um programa que leia 7 nomes de pessoas e guarde-os em um vetor. No 
final, mostre uma listagem com todos os nomes informados, na ordem inversa 
daquela em que eles foram informados.*/

$vetores = [];

for ($i = 1; $i <= 7; $i++) {
    echo "Digite um nome: " . PHP_EOL;
    $vetores [$i] = readline(); 
    $vetores_inertido = array_reverse($vetores);  
}

foreach ($vetores_inertido as $indice => $valor) {
    echo "[$indice] => $valor" . PHP_EOL;
}