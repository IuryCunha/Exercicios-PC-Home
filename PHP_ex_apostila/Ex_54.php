<?php

/* 54) Desenvolva um aplicativo que leia o peso e a altura de 7 pessoas, mostrando
no final:
a) Qual foi a média de altura do grupo
b) Quantas pessoas pesam mais de 90Kg
c) Quantas pessoas que pesam menos de 50Kg tem menos de 1.60m
d) Quantas pessoas que medem mais de 1.90m pesam mais de 100Kg. */

$contador = 1;

$mediaAlt = 0;
$soma = 0;
$maisDe90kg = 0;
$menos50KG_Menos160M = 0;
$mais190M_mais100KG = 0;

$obtevebreak = false;

while ($contador <= 7) {

    echo "Peso da pessoa " . $contador . ": ";
    $peso = (fgets(STDIN)); 
    
    if (is_numeric($peso)) {

        $pesoFloat =  floatval($peso);
        echo "Altura da pessoa " . $contador . ": ";
        $altura = (fgets(STDIN));

        if (is_numeric($altura)) {

            $alturaFloat = floatval($altura);
            $contador++;
    
            $soma = $soma += $alturaFloat;
            $mediaAlt = $soma / 7;

            if ($pesoFloat > 90) {
                $maisDe90kg = $maisDe90kg + 1;
            }
            if ($pesoFloat < 50 && $alturaFloat < 1.60) {
                $menos50KG_Menos160M = $menos50KG_Menos160M + 1;
            }
            if ($alturaFloat > 1.90 && $pesoFloat > 100) {
                $mais190M_mais100KG = $mais190M_mais100KG + 1;
            }
        }
        else {
            $obtevebreak = true;
            break;
        }    
    }
    else {
        $obtevebreak = true;
        break;
    }    
}

if ($obtevebreak == true) {
    echo "Insira uma informação válida.";
}
elseif ($obtevebreak == false) {    
    echo "A soma das alturas é $soma"  . PHP_EOL;
    echo "A media das alturas é :" . number_format($mediaAlt , 2, ',' ,'.')  . PHP_EOL;
    echo "Pessoas com mais de 90kg: $maisDe90kg" . PHP_EOL;
    echo "Pessoas com menos de 50kg e menos de 1.60cm: $menos50KG_Menos160M" . PHP_EOL;
    echo "Pessoas com mais de 1.90cm e mais de 100kg: $mais190M_mais100KG" . PHP_EOL;
}