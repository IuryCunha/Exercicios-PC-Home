<?php

/*53) Faça um programa que leia a idade e o sexo de 5 pessoas, mostrando no final:
a) Quantos homens foram cadastrados
b) Quantas mulheres foram cadastradas
c) A média de idade do grupo
d) A média de idade dos homens
e) Quantas mulheres tem mais de 20 anos */

$contador = 1;
$Hcad = 0; 
$Mcad = 0;
$soma = 0; 
$media = 0;
$somaH = 0;
$mediaH = 0;
$Mmaior20 = 0;

$obteveBreak = false;

echo "Digite (1) para Homens e (2) para Mulheres." . PHP_EOL;

while ($contador <= 5) {
    
    echo  $contador . "° Gênero: ";
    $HM = (int) trim(fgets(STDIN));

    if ($HM == 1 || $HM == 2) {    
    
        echo "Idade: ";
        $idade = (int) trim(fgets(STDIN));
        $contador++;

        if ($HM == 1) {
            $Hcad = $Hcad + 1;
        }
        if ($HM == 2) {
            $Mcad = $Mcad + 1;
        }

        $soma = $soma += $idade;
        $media = $soma / 5;

        if ($HM == 1) {
            $somaH = $somaH += $idade;
            $mediaH = $somaH / $Hcad;
        }

        if ($HM == 2 && $idade > 20) {
            $Mmaior20 = $Mmaior20 + 1;
        }
    }
    elseif ($HM != 1 || $HM != 2) {
        $obteveBreak = true;
        break;
    }
}

if ($obteveBreak == true) {
    echo "Programa finalizado por falta de informação correta";
}
elseif ($obteveBreak == false) {
    echo "Homens cadastrados: $Hcad" . PHP_EOL;
    echo "Mulheres cadastradas: $Mcad" . PHP_EOL;
    echo "Média de idade do grupo: $media" . PHP_EOL;
    echo "Média de idade dos Homens: $mediaH" . PHP_EOL;
    echo "Mulheres maior que 20: $Mmaior20";
}