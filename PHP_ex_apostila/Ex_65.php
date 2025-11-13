<?php 

/*65) Desenvolva um programa usando a estrutura “para” que mostre na tela a 
seguinte contagem: 
100 90 80 70 60 50 40 30 20 10 0 Acabou!*/

for ($contador = 100; $contador >= 0; $contador-=10) {
    echo "O contador é $contador" . PHP_EOL;
}
    echo "Acabou!";