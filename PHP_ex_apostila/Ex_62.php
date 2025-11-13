<?php

/*62) Faça um programa usando a estrutura “faça enquanto” que leia a idade de 
várias pessoas. A cada laço, você deverá perguntar para o usuário se ele quer ou 
não continuar a digitar dados. No final, quando o usuário decidir parar, mostre 
na tela: 
a) Quantas idades foram digitadas 
b) Qual é a média entre as idades digitadas 
c) Quantas pessoas tem 21 anos ou mais. */

$contador = 1;
$flag = true;
$break = false;
$idadesDigitadas = 0;
$soma = 0;
$media = 0;
$pessoas21anos = 0;

do {
    echo "Idade da " . $contador . "° Pessoa" . PHP_EOL;
    $idade = readline();
    $contador++;

        if (is_numeric($idade)) {

            echo "Deseja continuar? (1) para sim e (2) para não." . PHP_EOL;
            $opcao = readline();

            if (is_numeric($opcao) && $opcao == 1 || $opcao == 2) {

                $idadesDigitadas = $idadesDigitadas + 1;

                $soma = $soma += $idade;
                $media = $soma / $idadesDigitadas;
                $arredondado_baixo = floor($media);

                if ($idade >= 21) {
                    $pessoas21anos = $pessoas21anos +1;
                }

                if ($opcao == 2) {
                    $flag = false;
                }
            }
            else {
                echo "Insira 1 ou 2 para continuar." . PHP_EOL;
                $break = true;
                break;
            }
        }
        else {
            echo "Insira uma informação válida." . PHP_EOL;
            $break = true;
            break;
        }

}
while ($flag == true) ;
    
if ($break == true) {
    echo "Reinicie o programa";
}
else {
    echo "Idades digitadas: $idadesDigitadas" . PHP_EOL;
    echo "A média de idade é: $arredondado_baixo anos". PHP_EOL;
    echo "Pessoas com 21 anos ou mais: $pessoas21anos"; 
}