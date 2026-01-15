<?php

/* 100) Melhore o exercício 96, criando além da função Media() uma outra função
chamada Situacao(), que vai retornar para o programa principal se o aluno está
APROVADO, em RECUPERAÇÃO ou REPROVADO. Essa nova função, vai receber como
parâmetro o resultado retornado pela função Media(). */

function Media($a, $b) {
    return ($a + $b) / 2;
}

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");

$resultado = Media($nota1, $nota2);

function Situacao($resultado) {
    if ($resultado >= 8) {
        return "APROVADO";
    }
    elseif ($resultado <= 8 && $resultado >= 6) {
        return "RECUPERAÇÃO";
    }
    else {
    return "REPROVADO";  
    }
}

$situacao = Situacao($resultado);

echo "A média é " . number_format($resultado, 1, ',', '.') . PHP_EOL;
echo "A situação do aluno é: $situacao";

/* $situacao = Situacao(Media($nota1, $nota2)); 

chamando uma função dentro da outra
*/