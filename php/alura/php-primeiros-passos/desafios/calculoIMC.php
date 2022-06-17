<?php

/**
 * DESAFIO 03
 * 
 * CALCULO DO IMC 
 */

$peso = 60;
$altura = 1.9;



// calculo do IMC

$imc = $peso / ($altura ** 2);


$abaixoDoPeso = $imc < 18.5;
$pesoNormal = $imc >= 18.5 && $imc < 25;
$sobrepeso = $imc >= 25 && $imc < 30;
$obesidadeGrau1 = $imc >= 30 && $imc < 35;
$obesidadeGrau2 = $imc >= 35 && $imc < 40;
$obesidadeGrau3 = $imc >= 40;


// FLUXO DE DECISAO PARA DECIDIR EM QUAL ESTADO O USUÁRIO SE ENCONTRA 
// EM RELAÇÃÕ AO SEU PESO. 

if ($abaixoDoPeso) {
    echo "IMC: $imc. Você está abaixo do peso.";
} elseif ($pesoNormal) {
    echo "IMC: $imc. Você está com o peso normal.";
} elseif ($sobrepeso) {
    echo "IMC: $imc. Você está com sobrepeso.";
} elseif ($obesidadeGrau1) {
    echo "IMC: $imc. Você está com obesidade grau I.";
} elseif ($obesidadeGrau2) {
    echo "IMC: $imc. Você está com obesidade grau II.";
} elseif ($obesidadeGrau3) {
    echo "IMC: $imc. Você está com obesidade grau III.";
}
