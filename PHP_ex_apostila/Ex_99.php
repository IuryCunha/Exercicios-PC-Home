<?php

/* 99) Faça um programa que possua uma função chamada Potencia(), que vai receber
dois parâmetros numéricos (base e expoente) e vai calcular o resultado da
exponenciação.
Ex: Potencia(5,2) vai calcular 52 = 25  */

function potencia($a, $b) {
    $potencia = $a ** $b;
    return $potencia;
}

$base = (int) readline("digite a base: ");
$expoente = (int) readline("digite o expoente: ");

$resultado = potencia($base, $expoente);
echo "o resultado de $base elevado a $expoente é $resultado";