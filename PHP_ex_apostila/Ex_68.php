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
$obtevebreak = false;

for ($contador = 1; $contador <= 8; $contador++) {
    
    $sexo = (int) readline("(1) Masculino e (2) Feminino. digite o sexo: ");

    if ($sexo != 1 && $sexo != 2) {
        echo "Informação inválida, ";
        $obtevebreak = true;
        break;
    }
    else {

    $peso = readline("Peso da pessoa: ");

        if (is_numeric($peso)) {
            if ($sexo == 2) {
                $mulherCad++;
                $soma += $peso;
                $mediaF = $soma / $mulherCad;
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
            $obtevebreak = true;
            break;
        }
    }          
}
if ($obtevebreak == false) {
    echo "Mulheres cadastradas: $mulherCad" . PHP_EOL;
    echo "Homens que pesam mais de 100Kg: $homem100" . PHP_EOL;
    echo "Média de peso entre as mulheres: " . number_format($mediaF , 2, ',' ,'.') . " KG" . PHP_EOL;
    echo "O maior peso entre os homens: $maiorPMasc" . PHP_EOL;
}
else {
    echo "Reinicie o programa";
}