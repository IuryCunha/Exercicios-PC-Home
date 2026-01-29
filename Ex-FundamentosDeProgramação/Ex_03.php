<?php

/* Desenvolva uma função que recebe 2 parãmetros um é a quantidade de horas trabalhadas de um funcionário em um mês, e o quanto ele recebe por hora.
O retorno da função deve ser a string "Salário igual a R$X", em que "X" é o quanto o funcionário ganhou por mês*/

$HTrabalhadas = (int) readline("Horas trabalhadas: ");
$ValorHora = (int) readline("Valor da hora: ");

function CalcSalario($HTrabalhadas, $ValorHora) {
    $X = $HTrabalhadas * $ValorHora;
    return "Salário igual a R$" . $X;
}

echo CalcSalario($HTrabalhadas, $ValorHora);