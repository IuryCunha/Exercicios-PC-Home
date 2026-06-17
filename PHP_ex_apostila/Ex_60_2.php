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

$idade = 0;
$nome = "";

$maiorIdade = null;
$menorIdade = null;
$nomeMaisVelho = "";
$nomeMaisJovem = "";

$menorIdadeMulher = null;
$nomeMulherMaisJovem = "";
$maiorIdadeMulher = null;
$nomeMulherMaisVelha = "";

$menorIdadeHomem = null;
$nomeHomemMaisJovem = "";
$maiorIdadeHomem = null;
$nomeHomemMaisVelho = "";

$soma = 0;
$media = 0;
$homens30anos = 0;
$mulherAbaixo18 = 0;
$totalPessoas = 0;

while ($flag == true) {

    $nome = readline("Nome da pessoa " . $contador . ": ");
    
    if (preg_match('/^[a-zA-ZÀ-ÿ ]+$/u', $nome)) {

        $idade = readline("idade: ");
        
        
        if (is_numeric($idade)) {

            $idade = intval($idade);
            
            echo "Sexo: " . PHP_EOL;
            
            $sexo = intval(readline("Digite (1) para Masculino e (2) para Feminino:"));
            
            if (is_numeric($sexo) && ($sexo == 1 || $sexo == 2)){

                echo "Deseja continuar?" . PHP_EOL;

                $opcao = intval(readline("Digite (1) para sim e (2) para não: ")); 

                if ($opcao == 1 || $opcao == 2) {
                    
                    if ($sexo == 1) {

                    

                        if ($maiorIdadeHomem === null) {
                            $maiorIdadeHomem = $idade;
                            $menorIdadeHomem = $idade;

                            $nomeHomemMaisVelho = $nome;
                            $nomeHomemMaisJovem = $nome;
                           
                        } else {

                            if ($idade > $maiorIdadeHomem) {
                                $maiorIdadeHomem = $idade;
                                $nomeHomemMaisVelho = $nome;
                            }
                            if ($idade < $menorIdadeHomem) {
                                $menorIdadeHomem = $idade;
                                $nomeHomemMaisJovem = $nome;
                            }
                        }
                    }

                    if ($sexo == 2) {

                   
                        if ($maiorIdadeMulher === null) {
                            $maiorIdadeMulher = $idade;
                            $menorIdadeMulher = $idade;
                            
                            $nomeMulherMaisVelha = $nome;
                            $nomeMulherMaisJovem = $nome;

                        } else {

                            if ($idade > $maiorIdadeMulher) {
                                $maiorIdadeMulher = $idade;
                                $nomeMulherMaisVelha = $nome;
                            }
                        
                            if ($idade < $menorIdadeMulher) {
                                $menorIdadeMulher = $idade;
                                $nomeMulherMaisJovem = $nome;
                            }
                        }

                    }

                    if ($maiorIdade === null || $idade > $maiorIdade) {
                        $maiorIdade = $idade;
                        $nomeMaisVelho = $nome;
                    }
                    if ($menorIdade === null || $idade < $menorIdade) {
                        $menorIdade = $idade;
                        $nomeMaisJovem = $nome;
                    }

                    $totalPessoas++;
                    $soma += $idade;
                    $media = $soma / $totalPessoas;

                    if ($sexo == 1 && $idade > 30) {
                        $homens30anos++;
                    }
                    if ($sexo == 2 && $idade < 18) {
                        $mulherAbaixo18++;
                    }

                    if ($opcao == 2) {
                        $flag = false;
                    }

                    if ($menorIdadeMulher === null) {
                        echo "Nenhuma mulher cadastrada." . PHP_EOL;
                    }
                    if ($menorIdadeHomem === null) {
                        echo "Nenhum homem cadastrado." . PHP_EOL;
                    }    
              
                } else {
                    exit("Digite 1 ou 2.");
                }

            } else {
                exit("Digite 1 ou 2 por favor.");
            }
        } else {
            exit("Digite uma idade válida");
        }
    } else {
        exit("Digite um nome válido" . PHP_EOL);
    }
    $contador++;
    
    echo "" . PHP_EOL;
    echo "RESULTADOS:" . PHP_EOL;
    echo "" . PHP_EOL;

    echo "Maior idade do grupo: $maiorIdade" . PHP_EOL;
    echo "Nome da pessoa mais velha: $nomeMaisVelho" . PHP_EOL;
    echo "Nome da pessoa mais jovem: $nomeMaisJovem" . PHP_EOL;

    echo "" . PHP_EOL;

    echo "Menor idade de mulher: $menorIdadeMulher" . PHP_EOL;
    echo "Nome da mulher mais jovem: $nomeMulherMaisJovem" . PHP_EOL;
    echo "Maior idade de mulher: $maiorIdadeMulher" . PHP_EOL;
    echo "Nome da mulher mais velha: $nomeMulherMaisVelha" . PHP_EOL;

    echo "" . PHP_EOL;

    echo "Menor idade de homem: $menorIdadeHomem" . PHP_EOL;
    echo "Nome do homem mais jovem: $nomeHomemMaisJovem" . PHP_EOL;
    echo "Maior idade de homem: $maiorIdadeHomem" . PHP_EOL;
    echo "Nome do homem mais velho: $nomeHomemMaisVelho" . PHP_EOL;

    echo "" . PHP_EOL;

    echo "Média de idade: $media" . PHP_EOL;
    echo "Homens com mais de 30 anos: $homens30anos" . PHP_EOL;
    echo "Mulheres com menos de 18 anos: $mulherAbaixo18" . PHP_EOL;
}