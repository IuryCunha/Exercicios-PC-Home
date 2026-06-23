<?php 

/*68) Crie um programa que leia sexo e peso de 8 pessoas, usando a estrutura 
“para”. No final, mostre na tela: 
a) Quantas mulheres foram cadastradas 
b) Quantos homens pesam mais de 100Kg 
c) A média de peso entre as mulheres  
d) O maior peso entre os homens */

$mulherCad = 0;
$homem100 = 0;
$soma = 0;
$mediaF = 0;
$maiorPMasc = null;
$erro = false;

for ($contador = 1; $contador <= 8; $contador++) {
    
    $sexo = (int) readline("(1) Masculino e (2) Feminino. digite o sexo: ");

    if ($sexo != 1 && $sexo != 2) {
        echo "Informação inválida, ";
        $erro = true;
        break;
    }
    else {

    $peso = (float) readline("Peso da pessoa: ");

        if (is_numeric($peso) && $peso > 0) {
            if ($sexo == 2) {
                $mulherCad++;
                $soma += $peso;
            }
            if ($sexo == 1) {
                if ($peso > 100) {
                    $homem100++;
                }
                if ($maiorPMasc === null || $peso > $maiorPMasc) {
                    $maiorPMasc = $peso;
                }
            }
        }
        else {
            echo "Informação incorreta, ";
            $erro = true;
            break;
        }
    }          
}

$mediaF = $soma / $mulherCad;

if ($erro == false) {
    echo "Mulheres cadastradas: $mulherCad" . PHP_EOL;
    echo "Homens que pesam mais de 100Kg: $homem100" . PHP_EOL;
    if ($mulherCad > 0) {
        echo "Média de peso entre as mulheres: " . number_format($mediaF, 2, ',', '.') . " KG" . PHP_EOL;
    }
    else {
        echo "Nenhuma mulher cadastrada para calcular a média de peso." . PHP_EOL;
    }
    if ($maiorPMasc !== null) {
        echo "O maior peso entre os homens: $maiorPMasc" . PHP_EOL;
    }
    else {
        echo "Nenhum homem cadastrado" . PHP_EOL;
    }
}
else {
    echo "Reinicie o programa";
}