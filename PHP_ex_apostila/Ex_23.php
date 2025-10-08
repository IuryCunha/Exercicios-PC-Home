<?php

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