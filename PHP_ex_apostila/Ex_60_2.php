<?php

$flag = true;
$contador = 1;
$obteveBreak = false;

$idadeHomem = 0;
$idadeMulher = 0;
$nomeHomem = "string";
$nomeMulher = "string";

$maiorIdade = 0;
$nomeMaisVelho = 0;

$menorIdadeMulher = 0;
$nomeMulherMaisJovem = 0;
$maiorIdadeMulher = 0;
$nomeMulherMaisVelha = 0;

$menorIdadeHomem = 0;
$nomeHomemMaisJovem = 0;
$maiorIdadeHomem = 0;
$nomeHomemMaisVelho = 0;

$soma = 0;
$media = 0;
$homens30anos = 0;
$mulherAbaixo18 = 0;


while ($flag == true) {

    $nome = readline("Nome da pessoa " . $contador . ": ");
    
    if (ctype_alpha($nome)) {

        $idade = readline("idade: ");
        
        if (is_numeric($idade)) {
            
            echo "Sexo: " . PHP_EOL;
            
            $sexo = readline("Digite (1) para Masculino e (2) para Feminino:");

            if ($sexo == 1) {
                $idade = $idadeHomem;
            }
            else {
                $idade = $idadeMulher;
            }
            
            if (is_numeric($sexo) && $sexo == 1 || $sexo == 2) {

                echo "Deseja continuar?" . PHP_EOL;

                $opcao = readline("Digite (1) para sim e (2) para não: "); 

                if (is_numeric($opcao) && $opcao == 1 || $opcao == 2) {
                    
                    if ($opcao == 1 && $sexo == 1) {
                        if (!isset($maiorIdadeHomem)) {
                            $maiorIdadeHomem = $idadeHomem;
                            $menorIdadeHomem = $idadeHomem;
                        }
                        if ($idadeHomem >= $maiorIdadeHomem) {
                            $maiorIdadeHomem = $idadeHomem;
                            //$nomeHomemMaisVelho = $nome;
                        }
                        if ($idadeHomem <= $menorIdadeHomem) {
                            $menorIdadeHomem = $idadeHomem;
                            //$nomeHomemMaisJovem = $nome;
                        }
                    }
                    if ($opcao == 1 && $sexo == 2) {
                        if (!isset($maiorIdadeMulher)) {
                            $maiorIdadeMulher = $idadeMulher;
                            $menorIdadeMulher = $idadeMulher;
                        }
                        if ($idadeMulher >= $maiorIdadeMulher) {
                            $maiorIdadeMulher = $idadeMulher;
                            //$nomeMulherMaisVelha = $nome;
                        }
                        if ($idadeMulher <= $menorIdadeMulher) {
                            $menorIdadeMulher = $idadeMulher;
                            //$nomeMulherMaisJovem = $nome;
                        }

                    }
                    if ($opcao == 2 && $sexo == 1) {
                        if (!isset($maiorIdadeHomem)) {
                            $maiorIdadeHomem = $idadeHomem;
                            $menorIdadeHomem = $idadeHomem;
                        }
                        if ($idadeHomem >= $maiorIdadeHomem) {
                            $maiorIdadeHomem = $idadeHomem;
                            //$nomeHomemMaisVelho = $nome;
                        }
                        if ($idadeHomem <= $menorIdadeHomem) {
                            $menorIdadeHomem = $idadeHomem;
                            //$nomeHomemMaisJovem = $nome;
                        }
                        $flag = false;  
                    }
                    if ($opcao == 2 && $sexo == 2) {
                        if (!isset($maiorIdadeMulher)) {
                            $maiorIdadeMulher = $idadeMulher;
                            $menorIdadeMulher = $idadeMulher;
                        }
                        if ($idadeMulher >= $maiorIdadeMulher) {
                            $maiorIdadeMulher = $idadeMulher;
                            //$nomeMulherMaisVelha = $nome;
                        }
                        if ($idadeMulher <= $menorIdadeMulher) {
                            $menorIdadeMulher = $idadeMulher;
                            //$nomeMulherMaisJovem = $nome;
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
    echo "Nome da mulher mais jovem: $nomeMulherMaisJovem" . PHP_EOL;
    echo "Maior idade de mulher: $maiorIdadeMulher" . PHP_EOL;
    echo "Nome da mulher mais velha: $nomeMulherMaisVelha" . PHP_EOL;

    echo "Menor idade de homem: $menorIdadeHomem" . PHP_EOL;
    echo "Nome do homem mais jovem: $nomeHomemMaisJovem" . PHP_EOL;
    echo "Maior idade de homem: $maiorIdadeHomem" . PHP_EOL;
    echo "Nome do homem mais velho: $nomeHomemMaisVelho" . PHP_EOL;
    echo "" . PHP_EOL;
    echo "" . PHP_EOL;
}