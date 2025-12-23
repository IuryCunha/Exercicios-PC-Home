<?php

/* 94) [DESAFIO] Desenvolva um aplicativo que tenha um procedimento chamado
Fibonacci() que recebe um único valor inteiro como parâmetro, indicando quantos
termos da sequência serão mostrados na tela. O seu procedimento deve receber
esse valor e mostrar a quantidade de elementos solicitados.
Obs: Use os exercícios 70 e 75 para te ajudar na solução
Ex:
Fibonacci(5) vai gerar 1 >> 1 >> 2 >> 3 >> 5 >> FIM
Fibonacci(9) vai gerar 1 >> 1 >> 2 >> 3 >> 5 >> 8 >> 13 >> 21 >> 34 >> FIM */

$sequencia = (int) readline("informe o termo da sequencia: ");

function Fibonacci($sequencia) {

    $vetores = [];

    $a = 1;
    $b = 1;



    for ($i = 0; $i < $sequencia; $i++) {
        if ($i == 0 || $i == 1) {
            $vetores [$i] = 1;
        }
        else {
            $c = $a + $b;
            $vetores [$i] = $c;
            $a = $b;
            $b = $c;
        }

    }

    foreach ($vetores as $valor) {
        echo $valor . " >> ";
    }
        echo " Fim" . PHP_EOL; 
}

Fibonacci($sequencia);