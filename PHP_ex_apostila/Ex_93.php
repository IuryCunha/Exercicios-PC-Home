<?php

/* 93) Faça um programa que tenha um procedimento chamado Contador() que recebe 
três valores como parâmetro: o início, o fim e o incremento de uma contagem. O 
programa principal deve solicitar a digitação desses valores e passá-los ao 
procedimento, que vai mostrar a contagem na tela. */

$inicio = (int) readline("Informe o inicio da contagem: ");
$fim = (int) readline("Informe o fim da contagem: "); 
$incremento = (int) readline("Informe o incremento da contagem: ");

function Contador($inicio, $fim, $incremento) {

    if ($incremento <= 0) {
        echo "Incremento inválido!" . PHP_EOL;
        return;
    }
    if ($inicio <= $fim) {
    
        for ($i = $inicio; $i <= $fim; $i += $incremento) {
            echo $i . PHP_EOL;    
        }
    }
    else {
        for ($i = $inicio; $i >= $fim; $i -= $incremento) {
            echo $i . PHP_EOL;    
        }
    }
}

Contador($inicio, $fim, $incremento);