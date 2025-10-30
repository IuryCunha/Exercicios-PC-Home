<?php

/*59) Crie um programa que leia o sexo e a idade de várias pessoas. O programa vai 
perguntar se o usuário quer continuar ou não a cada pessoa. No final, mostre: 
a) qual é a maior idade lida 
b) quantos homens foram cadastrados 
c) qual é a idade da mulher mais jovem 
d) qual é a média de idade entre os homens */

$flag = true;
$contador = 1;
$obteveBreak = false;

$maior_idade = 0;
$homensCad = 0;
$idadeFem_MaisJ = 0;
$soma = 0;
$media_idadeMas = 0;

while ($flag == true) {

    echo $contador . "° pessoa:" . PHP_EOL;
    echo "Sexo: " . PHP_EOL;
    echo "(1) para Masculino e (2) para Feminino: ";
    $sexo = readline();

    if (is_numeric($sexo) && $sexo == 1 || $sexo == 2) {

        echo "Idade: " . PHP_EOL;
        $idade = readline();

        if (is_numeric($idade)) {

            echo "Deseja continuar? (1) para Sim e (2) para Não: ";
            $opcao = readline();

            if (is_numeric($opcao)) {
                
                if ($opcao == 1) {

                    if ($contador == 1) {
                        $maior_idade = $idade;
                    }
                    if ($idade > $maior_idade) {
                        $maior_idade = $idade;
                    }
                    if ($sexo == 1) {
                        $homensCad = $homensCad + 1;
                        $soma = $soma += $idade;
                        $media_idadeMas = $soma / $homensCad;
                    }
                }    
                elseif ($opcao == 2) {

                    if ($contador == 1) {
                        $maior_idade = $idade;
                    }
                    if ($idade > $maior_idade) {
                        $maior_idade = $idade;
                    }
                    if ($sexo == 1) {
                        $homensCad = $homensCad + 1;
                        $soma = $soma += $idade;
                        $media_idadeMas = $soma / $homensCad;
                    }
                    $flag = false;
                }
            }
            else {
                echo "Informação incorreta." . PHP_EOL;
                $obteveBreak = true;
                break;
            }
        }
        else {
            echo "Informação incorreta." . PHP_EOL;
            $obteveBreak = true;
            break; 
        }
    $contador++;
    }
    else {
        echo "Informação incorreta." . PHP_EOL;
        $obteveBreak = true;
        break;
    }
}

if ($obteveBreak == true) {
    echo "Reinicie o programa.";
}
else {
    echo "A maior idade é: $maior_idade" . PHP_EOL;
    echo "Total de homens cadastrados: $homensCad anos" . PHP_EOL;
    echo "A idade da mulher mais jovem é: $idadeFem_MaisJ anos" . PHP_EOL;
    echo "Media de idade Masculina: " . number_format($media_idadeMas , 2, ',' ,'.');
}