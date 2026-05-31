<?php

/*18) Faça um programa que leia o ano de nascimento de uma pessoa, calcule a idade 
dela e depois mostre se ela pode ou não votar.*/

echo "Qual o ano de nascimento? ";
$anoN = fgets(STDIN);

$idade = 2025 - $anoN;

if ($idade >= 16) {
    echo "Você pode votar";
} 
else {
    echo "Você ainda não pode votar";
}
