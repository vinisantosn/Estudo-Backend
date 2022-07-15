<?php

$notas = [
    'Ana' => 10,
    'João' => 9,
    'Maria' => 8,
    'Roberto' => 7,
    'Raimundo' => 6,
    'Vinicius' => NULL
];

//ORDENANDO DE MANEIRA CRESCENTE
// sort($notas);
//ORDENANDO DE MANEIRA DECRESCENTE
//rsort($notas);
//ORDENANDO DE MANEIRA CRESCENTE MAS ASSOCIANDO AS CHAVES
//asort($notas);
//ORDENANDO DE MANEIRA DECRESCENTE MAS ASSOCIANDO AS CHAVES
//arsort($notas);
//ORDENANDO DE MANEIRA CRESCENTE PELAS CHAVES
// ksort($notas);
//ORDENANDO DE MANEIRA DECRESCENTE PELAS CHAVES
krsort($notas);


var_dump($notas);

/**
 * VERIFICAÇÕES
 */

// echo gettype($notas);
// //PARA SABER SE A VARIAVEL EM QUESTÃO É UM ARRAY 
// if (is_array($notas)){
//     echo "É UM ARRAY".PHP_EOL;
// }else{
//     echo "NÃO É UM ARRAY".PHP_EOL;
// }

// //PARA VERIFICAR SE UM ARRAY POSSUI CHAVES DO TIPO INTEIRO (VÃO DO ZERO AO LIMITE DO ARRAY EM ORDEM CRESCENTE)
// var_dump(array_is_list($notas));

// VERIFICAR SE UMA CHAVE EXISTE EM UM ARRAY
var_dump(array_key_exists('Vinicius', $notas));

//VERIFICA SE EM UMA CHAVE EXISTE VALOR E QUE SEJA DIFERENTE DE ZERO
var_dump(isset($notas['Vinicius']));

//VERIFICA A EXISTENCIA DE UM VALOR DENTRO DO ARRAY 
var_dump(in_array(10,$notas));

// VERIFICAR A QUE CHAVE PERTENCE DETERMINDADO VALOR
echo array_search(10,$notas);
