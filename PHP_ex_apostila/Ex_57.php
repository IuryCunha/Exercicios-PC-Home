<?php

/*57) Desenvolva um aplicativo que leia o salário e o sexo de vários funcionários.
No final, mostre o total de salários pagos aos homens e o total pago às
mulheres. O programa vai perguntar ao usuário se ele quer continuar ou não
sempre que ler os dados de um funcionário.*/

$flag = true;
$obteveBreak = false;
$somaM = 0;
$somaF = 0;
$contador  = 1;

echo "SALÁRIOS DOS FUNCIONÁRIOS.";
echo "" . PHP_EOL;


while ($flag == true) {

    echo $contador++ . "° funcionário" . PHP_EOL ;
    echo "Sexo: " ; PHP_EOL;
    echo "(1) para Masculino e (2) para feminino:" . PHP_EOL;
    $sexo = readline();
    
    if (is_numeric($sexo) && $sexo == 1 || $sexo == 2) {

        echo "Salário: R$";
        $salario = readline();

        if (is_numeric($salario)) {

            echo "Deseja continuar? (1) para Sim e (2) para Não: ";
            $opcao = readline();  

            if (is_numeric($opcao) && $opcao == 1 || $opcao == 2) {

                if ($opcao == 1 && $sexo == 1) {
                    $somaM = $somaM += $salario;
                }
                elseif ($opcao == 1 && $sexo == 2) {
                    $somaF = $somaF += $salario;
                }
                elseif ($opcao == 2 && $sexo == 1) {
                    $somaM = $somaM += $salario;
                    $flag = false;
                }
                elseif ($opcao == 2 && $sexo == 2) {
                    $somaF = $somaF += $salario;
                    $flag = false;
                }
            }
            else {
                $obteveBreak = true;
                echo "Informação inválida." . PHP_EOL;
                break;
            }
        }
        else {
            $obteveBreak = true;
            echo "Informação não devida" . PHP_EOL;
            break;    
        }    
    }
    else {
        $obteveBreak = true;
        echo "Informação incorreta." . PHP_EOL;
        break;
    }
}

if ($obteveBreak == true) {
    echo "Reinicie o programa.";
}
else {
    echo "Salários Masculino: R$" . number_format($somaM , 2, ',' ,'.') . PHP_EOL;
    echo "Salários Femininos: R$" . number_format($somaF , 2, ',' ,'.') . PHP_EOL; 
}