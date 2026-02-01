<?php

/* Crie uma função que recebe um número de (1 a 12) e retorne o mês correspondente como uma string. Por exemplo: se a entrada for 2 a função deverá retornar "fevereiro" pois é o segundo mês. */

$numero = (int) readline("Digite um número de 1 a 12: ");

function StringMes($numero)
{
    $meses = [
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    ];
    return $meses[$numero] ?? "Número inválido";
}

$MesString = StringMes($numero);

if ($MesString === "Número inválido") {
    echo $MesString;
} else {
    echo "O número $numero corresponde a $MesString nos meses do ano";
}