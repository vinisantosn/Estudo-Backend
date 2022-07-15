<?php

$notasPrimeiroBimestre = [
    'Ana' => 10,
    'João' => 9,
    'Maria' => 8,
    'Roberto' => 7,
    'Raimundo' => 6,
    'Vinicius' => 6
];

$notasSegundoBimestre = [
    'Ana' => 10,
    'João' => 9,
    'Maria' => 6,
    'Roberto' => 7,


];

// // DIFERENÇA ENTRE ARRAYS -> É LEVADO EM CONSIDERAÇÃO O VALOR E Ñ AS CHAVES
// var_dump(array_diff($notasPrimeiroBimestre,$notasSegundoBimestre));
// // DIFERENÇA ENTRE ARRAYS -> LEVA EM CONSIDERAÇÃO AS CHAVES
// var_dump(array_diff_key($notasPrimeiroBimestre,$notasSegundoBimestre));
// //DIFERENÇA ENTRE ARRAYS -> LEVANDO EM CONSIDERAÇÃO CHAVES E VALORES
// var_dump(array_diff_assoc($notasPrimeiroBimestre,$notasSegundoBimestre));

$alunosFaltantes = array_diff_key($notasPrimeiroBimestre, $notasSegundoBimestre);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump($nomesAlunos);
var_dump($notasAlunos);


//COMBINANDO ARRAYS E DETERMINANDO QUAL DOS ARRAYS VAI SER CHAVE E QUAL VAI SER O VALOR 
var_dump(array_combine($notasAlunos, $nomesAlunos));
