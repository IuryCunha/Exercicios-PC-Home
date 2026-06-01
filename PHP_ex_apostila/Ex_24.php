<?php

/* 24) Faça um algoritmo que pergunte a distância que um passageiro deseja
percorrer em Km. Calcule o preço da passagem, cobrando R$0.50 por Km para
viagens até 200Km e R$0.45 para viagens mais longas. */

$passagem = 0;

echo "qual distância voce deseja percorrer? ";
$distancia = readline();

if ($distancia <= 200) {
    $passagem = $distancia * 0.50;
} else {
    $passagem = $distancia * 0.45;
}
echo "o preço da passagem é de R$ $passagem";