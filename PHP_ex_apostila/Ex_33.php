<?php

/* 33) Escreva um programa para aprovar ou não o empréstimo bancário para a compra
de uma casa. O programa vai perguntar o valor da casa, o salário do comprador e
em quantos anos ele vai pagar. Calcule o valor da prestação mensal, sabendo que
ela não pode exceder 30% do salário ou então o empréstimo será negado. */

echo "Valor do imóvel: ";
$imovel = readline();
echo "Salário do comprador: ";
$sala = readline();
echo "Anos a pagar: ";
$anos = readline();

$numeroDEpresta = 12 * $anos;
$mensalidade = $imovel / $numeroDEpresta;  
echo "Mensalidade calculada: ";
var_dump($mensalidade);

$limite = ($sala * 30) / 100;
echo "Limite de aprovação: ";
var_dump($limite);

if ($mensalidade > $limite) {
    echo "Empréstimo negado";
}
else {
    echo "Empréstimo aprovado";
}