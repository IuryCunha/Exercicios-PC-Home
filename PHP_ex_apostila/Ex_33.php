<?php

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
    echo "Empréstimo negado: ";
}
else {
    echo "Empréstimo aprovado";
}