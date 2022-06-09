<?php

// TIPOS PRIMITIVOS 

$idade = 22; // INTEIRO - INTERGER
$salario = 2765.32; // DECIMAL - FLOAT OU DOUBLE 
$possuiDependentes = true; // BOOLEANO - TRUE OU FALSE
$nome = "Vinicius Santos"; // TEXTO - STRING

$msg = "\t Identificando tipos de dados".PHP_EOL;

echo $msg;

echo "IDADE = ".gettype($idade).PHP_EOL;
echo "SALARIO = ".gettype($salario).PHP_EOL;
echo "POSSUIDEPENDENTES = ".gettype($possuiDependentes).PHP_EOL;
echo "NOME = ".gettype($nome).PHP_EOL;
