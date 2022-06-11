<?php

// ESTUDO DE REPETIÇÃO COM FOR

// SEU USO ESTÁ ATRELADO A SER O LIMITE CONDICIONAL, OU SEJA, QUANTAS VEZES
// ESSE LAÇO IRÁ SE REPETIR. 

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        continue;
    } 
    echo "# $contador" . PHP_EOL;
}
