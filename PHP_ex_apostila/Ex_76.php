<?php

/*76) Crie um programa que preencha automaticamente um vetor numérico com 7 
números gerados aleatoriamente pelo computador e depois mostre os valores 
gerados na tela.*/

$vetores = [];

for ($i = 0; $i <= 7; $i++) {
    $vetores [$i] = rand(1,10);
}

foreach ($vetores as $indice => $valor) {
    echo "[$indice] => $valor" . PHP_EOL;
}