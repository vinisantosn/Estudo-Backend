<?php

/**
 * OS TIPOS DE CHAVES UTILIZADOS EM ARRAYS ASSOCIATIVOS SÃO:
 * 
 * INTEIRO 
 * STRINGS
 * 
 * PORTANTO QUAISQUER OUTRO TIPO É CONVERTIDO PARA TAL. 
 */

$curso = [
    1 => 'a',
    '1' => 'b',
    true => 'c',
    1.5 => 'd'
    /**
 * NO CASO ACIMA, TODAS ESSAS CHAVES SÃO
 * VISTAS COMO UM E VÃO SE SOBSCREVENDO
 */

];
