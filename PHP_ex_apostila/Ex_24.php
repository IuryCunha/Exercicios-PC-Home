<?php

echo "qual distância voce deseja percorrer? ";
$distancia = readline();

if ($distancia <= 50) {
    $passagem = $distancia * 1;
}
elseif ($distancia > 50 and $distancia <= 100) {
    $passagem = $distancia * 2;
}
echo "o preço da passagem é de R$ $passagem";