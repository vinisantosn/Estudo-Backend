<?php

// ADICIONANDO NOVOS ARQUIVOS AO PROGRAMA -> INCLUDE PARA ARQUIVOS NÃO OBRIGATORIOS 
//                                        -> REQUIRE PARA ARQUIVOS OBRIGATORIOS

// include 'funcoes-banco.php'; 
require_once 'funcoes-banco.php'; // VERIFICA SE O ARQV JÁ FOI INCLUIDO


$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinícius',
        'saldo' => 2000
    ],
    12345678911 => $conta2 = [
        'titular' => 'João',
        'saldo' => 3000
    ],
    12345678912 => $conta3 = [
        'titular' => 'Maria',
        'saldo' => 100
    ]
];

$contasCorrentes[12345678913] = [
    'titular' => 'Claudio',
    'saldo' => 5000
];

$contasCorrentes[] = [
    'titular' => 'José',
    'saldo' => 5000
];

/** MODELO ANTIGO DE SAQUE (SEM O CONHECIMENTO DE SUBROTINAS)
 * 
 *  REALIZANDO UM SAQUE NA CONTA 12345678910
 *
 * $contasCorrentes[12345678910]['saldo'] -= 500;
 *
 *  APRESENTANDO PROBLEMA DE SAQUE ALÉM DAQUILO QUE É PERMITIDO
 * 
 * if (500 > $contasCorrentes[12345678912]['saldo']) {
 *     echo "Saldo indisponivel" . PHP_EOL;
 * } else {
 *     $contasCorrentes[12345678912]['saldo'] -= 500;
 * }
 *  
 */

// $contasCorrentes[12345678910] = sacarDe($contasCorrentes[12345678910], 500);
// extratoDeContas($contasCorrentes);

// //removendo um item de uma lista

// unset($contasCorrentes['12345678913']);

// //manipulando string - colocando em maiusculo
// titularComLetrasMaiusculas($contasCorrentes['12345678910']);


// $contasCorrentes[12345678912] = depositarEm($contasCorrentes[12345678912], 900.00);
// // $contasCorrentes[12345678912] = sacarDe($contasCorrentes[12345678912], 500);
// extratoDeContas($contasCorrentes);



/**
 * PHP NA WEB
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        CONTAS CORRENTES
    </h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) {
            ['titular' => $titular, 'saldo' => $saldo] = $conta; ?>
            <dt>
                <h3><?= $titular; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>Saldo: <?= $saldo; ?></dd>
        <?php } ?>
    </dl>
</body>

</html>