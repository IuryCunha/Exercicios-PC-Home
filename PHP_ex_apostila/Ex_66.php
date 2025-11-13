<?php 

/*66) Escreva um programa que leia um número qualquer e mostre a tabuada desse 
número, usando a estrutura “para”. 
Ex: Digite um valor: 5 
5 x 1 = 5 
5 x 2 = 10 
5 x 3 = 15 ...*/ 

//echo "Digite um número: " . PHP_EOL;

$numero = (int) readline("Digite um número: ");

for ($contador = 1; $contador <= 10; $contador++) {

    echo "A tabuada de $numero é: " . PHP_EOL;
    echo "$numero x $contador = " . $contador * $numero . PHP_EOL; 
}