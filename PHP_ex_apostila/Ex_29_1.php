<?php

/* 29) Desenvolva um programa que leia o nome de um funcionário, seu salário,
quantos anos ele trabalha na empresa e mostre seu novo salário, reajustado de
acordo com a tabela a seguir:
 - Até 3 anos de empresa: aumento de 3%
 - entre 3 e 10 anos: aumento de 12.5%
 - 10 anos ou mais: aumento de 20% */

echo "Nome: ";
$nome = readline();
echo "Salário: ";
$sala = readline();
echo "Anos na empresa: ";
$anos = readline();

if ($anos < 3) {
    echo "O funcionário $nome receberá um aumento de 3%" . PHP_EOL;
    $aumento = ($sala * 3) / 100;
    var_dump($aumento);
    
    $novo_sala = $sala + $aumento;
    var_dump($novo_sala);
    $novo_salaFormt = number_format($novo_sala , 2, ',', '.');
    echo "Seu salario de R$ $sala passará para R$ $novo_salaFormt";
}
elseif ($anos >= 3 && $anos < 10) {
    echo "O funcionário $nome receberá um aumento de 12.5%" . PHP_EOL;
    $aumento = ($sala * 12.5) / 100;
    var_dump($aumento);
    
    $novo_sala = $sala + $aumento;
    var_dump($novo_sala);
    
    $novo_salaFormt = number_format($novo_sala , 2, ',', '.');
    echo "Seu salario de R$ $sala passará para R$ $novo_salaFormt";
}
elseif ($anos >= 10) {
    echo "O funcionário $nome receberá um aumento de 20%" . PHP_EOL;
    $aumento = ($sala * 20) / 100;
    var_dump($aumento);
    
    $novo_sala = $sala + $aumento;
    var_dump($novo_sala);
    $novo_salaFormt = number_format($novo_sala , 2, ',', '.');
    echo "Seu salario de R$ $sala passará para R$ $novo_salaFormt";
}