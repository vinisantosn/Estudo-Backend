<?php

/**
 * DESAFIO 01
 * IMPRIMIR DE 0-100 TODOS OS NÚMEROS ÍMPARES
 *  
 */

for ($i = 0; $i < 100; $i++) {
    if (($i % 2) != 0) {
        echo $i . PHP_EOL;
    }
}
