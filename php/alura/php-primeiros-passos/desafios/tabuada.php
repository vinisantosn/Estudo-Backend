<?php

/**
 * DESAFIO 02
 * 
 * FAZER A TABUADA DE UM DETERMINADO NÚMERO.
 * 
 */

$tabuadaDo = 3;

$msg = "\t TABUADA DO $tabuadaDo".PHP_EOL;
echo $msg;

for($i = 0; $i<11; $i++){
    $resultado = $i*$tabuadaDo;
    echo "$tabuadaDo X $i = $resultado".PHP_EOL; 
}