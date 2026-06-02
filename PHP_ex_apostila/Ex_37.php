<?php

/* 37) Uma empresa precisa reajustar o salário dos seus funcionários, dando um
aumento de acordo com alguns fatores. Faça um programa que leia o salário atual,
o gênero do funcionário e há quantos anos esse funcionário trabalha na empresa.
No final, mostre o seu novo salário, baseado na tabela a seguir:
- Mulheres
 - menos de 15 anos de empresa: +5%
 - de 15 até 20 anos de empresa: +12%
 - mais de 20 anos de empresa: +23%
- Homens
 - menos de 20 anos de empresa: +3%
 - de 20 até 30 anos de empresa: +13%
 - mais de 30 anos de empresa: +25% */

echo "Salário: ";
$sala = readline();
echo "Gênero; (1) para feminino e (2) para masculino: ";
$gene = readline();
echo "Anos na empresa: ";
$anos = readline();

if ($gene == 1) {

    if ($anos < 15) {
        $aumento = ($sala * 5) / 100;
        $novoSala = $sala + $aumento;
        echo "Seu novo salário será de R$$novoSala";
    }
    elseif ($anos >= 15 && $anos <= 20) {
        $aumento = ($sala * 12) / 100;
        $novoSala = $sala + $aumento;
        echo "Seu novo salário será de R$$novoSala";
    }
    elseif ($anos > 20) {
        $aumento = ($sala * 23) / 100;
        $novoSala = $sala + $aumento;
        echo "Seu novo salário será de R$$novoSala";
    }    
}
elseif ($gene == 2) {

    if ($anos < 20) {
        $aumento = ($sala * 3) / 100;
        $novoSala = $sala + $aumento;
        echo "Seu novo salário será de R$$novoSala";
    }
    elseif ($anos >= 20 && $anos <= 30) {
        $aumento = ($sala * 13) / 100;
        $novoSala = $sala + $aumento;
        echo "Seu novo salário será de R$$novoSala";
    }
    elseif ($anos > 30) {
        $aumento = ($sala * 25) / 100;
        $novoSala = $sala + $aumento;
        echo "Seu novo salário será de R$$novoSala";
    }    
}
else {
    echo "Insira 1 ou 2 para prosseguir";
}