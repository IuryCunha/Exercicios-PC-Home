<?php

/* 23) Numa promoção exclusiva para o Dia da Mulher, uma loja quer dar descontos
para todos, mas especialmente para mulheres. Faça um programa que leia nome,
sexo e o valor das compras do cliente e calcule o preço com desconto. Sabendo
que:
 - Homens ganham 5% de desconto
 - Mulheres ganham 13% de desconto */

echo "Nome do cliente: ";
$nome = readline();
echo "Sexo: ";
$sexo = readline();
echo "Valor da compra: ";
$compra = readline();


var_dump($sexo);

if ($sexo === "Masculino" or $sexo === "MASCULINO" or $sexo === "masculino") {
    $desconto = $compra / 100 * 5;
    echo "deconto de R$ $desconto" . PHP_EOL;
    $valor_final = $compra - $desconto;
    echo "o valor final com desconto é de: R$ $valor_final , volte sempre $nome!";
}    
elseif ($sexo === "Feminino" or $sexo === "FEMININO" or $sexo === "feminino") { 
    $desconto = $compra / 100 * 13;
    echo "deconto de R$ $desconto" . PHP_EOL;
    $valor_final = $compra - $desconto;
    echo "o valor final com desconto é de: R$ $valor_final , volte sempre $nome!";
}
else {
   echo "insira alguma informação";
}