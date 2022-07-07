<?php

/**
 * FOREACH 
 * 
 * A UTILIZAÇÃO DO FOREACH FACULTA AO PROGRAMA SABER A CHAVE AO QUAL SE REFERE TAL VALOR 
 * NESTE CASO O CPF
 */

$contasCorrentes = [
    12345678910 => [
        'nome' => 'Vinícius',
        'saldo' => 2000
    ],
    12345678911 => $conta2 = [
        'nome' => 'João',
        'saldo' => 3000
    ],
    12345678912 => $conta3 = [
        'nome' => 'Maria',
        'saldo' => 100
    ]
];

$contasCorrentes[12345678913] = [
    'nome' => 'Claudio',
    'saldo' => 5000
];

$contasCorrentes[] = [
    'nome' => 'José',
    'saldo' => 5000
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . "\t" . $conta['nome'] . PHP_EOL;
}
