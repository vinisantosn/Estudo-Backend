<?php

// MINHA SOLUÇÃO PARA O DESAFIO DO INSTRUTOR 

// IMPRIMIR DE 1 A 15 

$contador = 0;

while (true) {
    $contador++;
    echo "# $contador" . PHP_EOL;
    if ($contador == 15) {
        return false;
    }
}

/**
 * SOLUÇÃO APONTADA PELO INSTRUTOR 
 * 
 * $contador = 1;
 * 
 * while ($contador <= 15 ){
 *      echo "# $contador". PHP_EOL;
 *      $contador = $contador + 1;
 * 
 * }
 *  
 */
