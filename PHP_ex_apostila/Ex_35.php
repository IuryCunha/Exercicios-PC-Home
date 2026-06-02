<?php

/* 35) Uma empresa de aluguel de carros precisa cobrar pelos seus serviços. O
aluguel de um carro custa R$90 por dia para carro popular e R$150 por dia para
carro de luxo. Além disso, o cliente paga por Km percorrido. Faça um programa
que leia o tipo de carro alugado (popular ou luxo), quantos dias de aluguel e
quantos Km foram percorridos. No final mostre o preço a ser pago de acordo com a
tabela a seguir:
 - Carros populares (aluguel de R$90 por dia)
 - Até 100Km percorridos: R$0,20 por Km
 - Acima de 100Km percorridos: R$0,10 por Km
 - Carros de luxo (aluguel de R$150 por dia)
 - Até 200Km percorridos: R$0,30 por Km
 - Acima de 200Km percorridos: R$0,25 por Km */

echo "Categoria do veículo (1) para popular e (2) para luxo: ";
$Cate = readline();
echo "Dias alugados: ";
$dias = readline();
echo "Km percorridos: ";
$KmP = readline();

if ($Cate == 1) {
    $aluguel = 90 * $dias;
    
    echo "Valor do aluguel: R$$aluguel" . PHP_EOL;

    if ($KmP <= 100) {
        $taxaKM = 1 * $KmP;
        echo "Taxa por Km percorrido R$$taxaKM" . PHP_EOL;
        $valortotal = $aluguel + $taxaKM;
        echo "Valor total de R$ $$valortotal";
    }
    elseif ($KmP > 100) {
        $taxaKM = 2 * $KmP;
        echo "Taxa por Km percorrido R$$taxaKM" . PHP_EOL;
        $valortotal = $aluguel + $taxaKM;
        echo "Valor total de R$ $$valortotal";
    }
}
elseif ($Cate == 2) {
    $aluguel = 150 * $dias;

    echo "Valor do aluguel: R$$aluguel" . PHP_EOL;
    
    if ($KmP <= 100) {
        $taxaKM = 3 * $KmP;
        echo "Taxa por Km percorrido R$$taxaKM" . PHP_EOL;
        $valortotal = $aluguel + $taxaKM;
        echo "Valor total de R$ $$valortotal";
    }
    elseif ($KmP > 100) {
        $taxaKM = 4 * $KmP;
        echo "Taxa por Km percorrido R$$taxaKM" . PHP_EOL;
        $valortotal = $aluguel + $taxaKM;
        echo "Valor total de R$ $$valortotal";
    }
}
else {
    echo "Insira 1 ou 2 para prosseguir";
}