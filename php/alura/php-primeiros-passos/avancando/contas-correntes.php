<?php

/**
 * ARRAY ASSOCIATIVO 
 * 
 */

$conta1 = [
    'nome' => 'Vinícius',
    'saldo' => 2000
];

$conta2 = [
    'nome' => 'João',
    'saldo' => 3000
];

$conta3 = [
    'nome' => 'Maria',
    'saldo' => 100
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['nome'] . PHP_EOL;
}
