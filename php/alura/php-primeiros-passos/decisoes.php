<?php

// ESTUDOS SOBRE CONTROLE DE FLUXO 

//DECLARAÇÃO E ATRIBUIÇÃO DE VALORES AS VARIAVEIS 
$minhaIdade = 17;
$possuiAcompanhanteMaiorDeIdade = true;

//VARIAREIS -> MENSAGENS
$msgAviso = "\t ATENÇÃO! ENTRADA PERMITIDA PARA IDADE A PARTIR DE 18 ANOS.";
$msgPermissao = "Você possui $minhaIdade. Portanto, acesso liberado.";
$msgPermissaoComAcompanhante = "Você possui $minhaIdade e está acompanhado por um de maior. Portanto, acesso liberado.";
$msgNegacao = "Você possui $minhaIdade. Portando, seu acesso foi negado!";

//CONDIÇÕES
$maiorIdade = $minhaIdade >= 18;
$maiorDe16 = $minhaIdade >= 16;
$entradaParaMaioresDe16 = $maiorDe16 && $possuiAcompanhanteMaiorDeIdade;

// MSG DE AVISO 
echo $msgAviso . PHP_EOL;

// CONTROLE DE FLUXO
if ($maiorIdade) {
    echo $msgPermissao . PHP_EOL;
} elseif ($entradaParaMaioresDe16) {
    echo $msgPermissaoComAcompanhante . PHP_EOL;
} else {
    echo $msgNegacao . PHP_EOL;
}

echo "Até logo.".PHP_EOL.PHP_EOL;


//OPERADOR TERNARIO
echo "OPERADOR TERNARIO TESTE -> AVALIANDO SINTAXE".PHP_EOL;

$msgDeMaiorDeIdade = $maiorIdade ? 'Você é maior de idade': 'Você é menor de idade';
echo $msgDeMaiorDeIdade;


