<?php 

/*67) Faça um programa usando a estrutura “para” que leia um número inteiro 
positivo e mostre na tela uma contagem de 0 até o valor digitado: 
Ex: Digite um valor: 9 
Contagem: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, FIM!*/

$numero = (int) readline("Digite um número: ");

if ($numero > 0) {

    for ($contador = 0; $contador <= $numero; $contador++) {
        echo "Contagem: " . $contador . PHP_EOL;
    }
        echo "Fim!";
    }
else {
    echo "Digite um número positivo";
}