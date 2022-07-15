<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'

];

// UNIR ARRAYS
$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);

// OUTRA FORMA DE UNIR É COM O OPERADOR +
/**
 * EXEMPLO -> $alunos2022 = $alunos2021 + $novosAlunos;
 */

// // COM O OPERADOR ... (SPREAD OPERATOR OU UNPACKING OPERATOR)
// $alunos2022ponto2 = [...$alunos2021,'Murilo Benicio', ...$novosAlunos];
// var_dump($alunos2022ponto2);

// ADICIONANDO ELEMENTOS AO ARRAY 
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

// -> APENAS A ADIÇÃO DE UM ELEMENTO
$alunos2022[] = 'Luiz';

// -> ADICINANDO NO COMEÇO 
array_unshift($alunos2022, 'Rafaela', 'Stephane');

// REMOVENDO ELEMENTOS -> DO INICIO
echo "\t REMOÇÃO DO PRIMEIRO ELEMENTO".PHP_EOL;
echo array_shift($alunos2022).PHP_EOL;

// REMOVENDO ELEMENTOS -> DO FINAL
echo "\t REMOÇÃO DO ÚLTIMO ELEMENTO".PHP_EOL;
echo array_pop($alunos2022).PHP_EOL;


var_dump($alunos2022);
