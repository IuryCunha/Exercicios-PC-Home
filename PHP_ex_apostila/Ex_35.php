<?php

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