<?php

/*51) Faça um aplicativo que leia o preço de 8 produtos. No final, mostre na tela
qual foi o maior e qual foi o menor preço digitados. */

$contador = 1;

$precoMaior = 0;
$precoMenor = 0;

while ($contador <= 8) {
    echo "Preço do produto " . $contador . ": R$";
    $preco = readline();
    $precofloat = floatval($preco);

    if ($contador == 1) {
        $precoMaior = $precofloat;
        $precoMenor = $precofloat;
    }

    if ($precofloat > $precoMaior) {
        $precoMaior = $precofloat;
        
    }
    if ($precofloat < $precoMenor) {
        $precoMenor = $precofloat;
    }
    $contador++;
}

echo "O maior preço foi: R$" . number_format($precoMaior , 2, ',', '.') . PHP_EOL;
echo "O menor preço foi: R$" . number_format($precoMenor , 2, ',', '.');