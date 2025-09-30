<?php

echo "Qual o ano de nascimento? ";
$anoN = fgets(STDIN);

$idade = 2025 - $anoN;

if ($idade >= 16) {
    echo "Você pode votar";
} 
else {
    echo "Você ainda não pode votar";
}