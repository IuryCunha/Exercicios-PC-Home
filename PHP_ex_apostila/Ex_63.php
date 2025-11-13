<?php

/*63) Crie um programa usando a estrutura “faça enquanto” que leia vários números. 
A cada laço, pergunte se o usuário quer continuar ou não. No final, mostre na 
tela: 
a) O somatório entre todos os valores 
b) Qual foi o menor valor digitado 
c) A média entre todos os valores 
d) Quantos valores são pares*/

$contador = 1;
$flag = true;
$obtevebreak = false;
$soma = 0;
$numDigitados = 0;
$media = 0;
$menorValor = null;
$pares = 0;

do {
    echo $contador . "° número: " . PHP_EOL;
    $valor = readline();
    $contador++;

    if (is_numeric($valor)) {

        echo "Deseja continuar? (1) para sim e (2) para não." . PHP_EOL;
        $opcao = readline();

        if (is_numeric($opcao) && $opcao == 1 || $opcao == 2) {

            $numDigitados = $numDigitados + 1;

            $soma = $soma += $valor;
            $media = $soma / $numDigitados;

            if ($valor % 2 == 0) {
            $pares++;
            }
            if ($menorValor === null || $valor < $menorValor) {
                $menorValor = $valor;
            }
            if ($opcao == 2) {
                $flag = false;
            }
        }
        else {
            echo "Digite 1 ou 2 para executar o programa." . PHP_EOL;
            $obtevebreak = true;
            break;
        }
    }
    else {
        echo "informação inválida" . PHP_EOL;
        $obtevebreak = true;
        break;
    }
}
while ($flag == true) ;

if ($obtevebreak == true) {
    echo "Reinicie o programa";
}
else {
    echo "Soma dos valores: $soma" . PHP_EOL;
    echo "Quantidade de numeros digitados: $numDigitados" . PHP_EOL;
    echo "Média dos  valores: " . number_format($media , 2, ',' ,'.') . PHP_EOL;
    echo "Menor valor digitado: $menorValor" . PHP_EOL;
    echo "Valores pares: $pares";
}