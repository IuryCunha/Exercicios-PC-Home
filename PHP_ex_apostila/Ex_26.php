<?php

/* 26) Escreva um algoritmo que leia dois números inteiros e compare-os, mostrando
na tela uma das mensagens abaixo:
 - O primeiro valor é o maior
 - O segundo valor é o maior
 - Não existe valor maior, os dois são iguais */

echo "Primeiro número: ";
$numero_1 = readline();
echo "Segundo número: ";
$numero_2 = readline();

if ($numero_1 > $numero_2) {
    echo "O primeiro valor é maior";
}
elseif ($numero_1 < $numero_2) {
    echo "O segundo valor é maior";
}
else {
    echo "Não existe valor maior, os dois são iguais.";
}
