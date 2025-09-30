<?php

echo "Qual a velocidade do carro? ";
$velocidade = fgets(STDIN);



if ($velocidade > 80) {
    echo "O usuaruio foi multado" . "\n";
    $multa = ($velocidade - 80)  * 5;
    echo "Valor da multa: $multa R$";
}
else {
    echo "Velocidade do veiculo dentro do limite";
}
