<?php

/*60) Desenvolva um algoritmo que leia o nome, a idade e o sexo de várias pessoas. 
O programa vai perguntar se o usuário quer ou não continuar. No final, mostre: 
a) O nome da pessoa mais velha 
b) O nome da mulher mais jovem 
c) A média de idade do grupo 
d) Quantos homens tem mais de 30 anos 
e) Quantas mulheres tem menos de 18 anos*/

$flag = true;
$contador = 1;
$obteveBreak = false;

$nomeMaisVelho = 0;
$nomeMulherJovem = 0;
$nomeHomemJovem = 0;
$soma = 0;
$media = 0;
$homens30anos = 0;
$mulherAbaixo18 = 0;

$maiorIdade = 0;

$menorIdadeMulher = 0;
$menorIdadeHomem = 0;

while ($flag == true) {

    echo "Nome da pessoa " . $contador . PHP_EOL;
    $nome = readline();
    
    if (ctype_alpha($nome)) {

        echo "idade: " . PHP_EOL;
        $idade = readline();
        
        if (is_numeric($idade)) {
            
            echo "Sexo: " . PHP_EOL;
            echo "Digite (1) para Masculino e (2) para Feminino:" . PHP_EOL;
            $sexo = readline();

            if (is_numeric($sexo) && $sexo == 1 || $sexo == 2) {

                echo "Deseja continuar?" . PHP_EOL;
                echo "Digite (1) para sim e (2) para não:  " . PHP_EOL;
                $opcao = readline(); 

                if (is_numeric($opcao) && $opcao == 1 || $opcao == 2) {
                    
                    if ($opcao == 1 && $sexo == 1) {
                        if ($contador == 1) {
                            $maiorIdade = $idade;
                            $menorIdadeMulher = $idade;
                        }
                        if ($idade >= $maiorIdade) {
                            $maiorIdade = $idade;
                            $nomeMaisVelho = $nome;
                        }
                        if ($sexo == 2 && $idade <= $menorIdadeMulher) {
                            $menorIdadeMulher = $idade;
                            $nomeMulherJovem = $nome;
                        }
                    }
                    if ($opcao == 1 && $sexo == 2) {
                        if ($contador == 1) {
                            $maiorIdade = $idade;
                            $menorIdadeMulher = $idade;
                        }
                        if ($idade >= $maiorIdade) {
                            $maiorIdade = $idade;
                            $nomeMaisVelho = $nome;
                        }
                        if ($idade <= $menorIdadeMulher) {
                            $menorIdadeMulher = $idade;
                            $nomeMulherJovem = $nome;
                        }

                    }
                    if ($opcao == 2 && $sexo == 1) {
                        if ($contador == 1) {
                            $maiorIdade = $idade;
                            $menorIdadeMulher = $idade;
                        }
                        if ($idade >= $maiorIdade) {
                            $maiorIdade = $idade;
                            $nomeMaisVelho = $nome;
                        }
                        if ($sexo == 2 && $idade <= $menorIdadeMulher) {
                            $menorIdadeMulher = $idade;
                            $nomeMulherJovem = $nome;
                        }
                        $flag = false;    
                    }
                    if ($opcao == 2 && $sexo == 2) {
                        if ($contador == 1) {
                            $maiorIdade = $idade;
                            $menorIdadeMulher = $idade;
                        }
                        if ($idade >= $maiorIdade) {
                            $maiorIdade = $idade;
                            $nomeMaisVelho = $nome;
                        }
                        if ($idade <= $menorIdadeMulher) {
                            $menorIdadeMulher = $idade;
                            $nomeMulherJovem = $nome;
                        }
                        $flag = false;
                    }
                }
                else {
                    $obteveBreak =  true;
                    echo "Digite 1 ou 2.";
                    break;
                }

            }
            else {
                $obteveBreak = true;
                echo "Digite 1 ou 2 por favor.";
                break;
            }
        }
        else {
            $obteveBreak = true;
            echo "Digite uma idade válida";
            break;
        }
    }
    else {
        $obteveBreak = true;
        echo "Digite um nome válido" . PHP_EOL;
        break;
    }
    $contador++;
}

if ($obteveBreak == true) {
    echo "Reinicie o Programa.";
}
else {
    echo "Maior idade do grupo: $maiorIdade" . PHP_EOL;
    echo "Nome da pessoa mais velha: $nomeMaisVelho" . PHP_EOL;
    echo "Menor idade de mulher: $menorIdadeMulher" . PHP_EOL;
    echo "Nome da mulher mais jovem: $nomeMulherJovem" . PHP_EOL;
    echo "Menor idade de homem: $menorIdadeHomem" . PHP_EOL;
    echo "Nome do homem mais jovem: $nomeHomemJovem" . PHP_EOL;
    echo "" . PHP_EOL;
    echo "" . PHP_EOL;
}