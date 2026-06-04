<?php

/* 38) Escreva um programa que mostre na tela a seguinte contagem:
6 7 8 9 10 11 Acabou! */

$condicao = 6;

while ($condicao <= 11)  {
    echo $condicao++ . PHP_EOL;
}
echo "Acabou!";