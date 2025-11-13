<?php

/*64) Desenvolva um programa usando a estrutura “para” que mostre na tela a 
seguinte contagem: 
0 5 10 15 20 25 30 35 40 Acabou!*/

for ($contador = 0; $contador <= 40; $contador+=5) :
    echo "O contador é $contador" . PHP_EOL;
endfor;
    echo "Acabou!";