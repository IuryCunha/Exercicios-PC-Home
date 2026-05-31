<?php

/*17) Escreva um programa que pergunte a velocidade de um carro. Caso ultrapasse 
80Km/h, exiba uma mensagem dizendo que o usuário foi multado. Nesse caso, exiba 
o valor da multa, cobrando R$5 por cada Km acima da velocidade permitida.*/

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
