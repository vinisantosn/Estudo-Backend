<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF,Endereco};


require_once 'autoload.php';


$contaTeste = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-00'),
        'Vinicius Santos',
        new Endereco(
            'São luís',
            'umBairro',
            'umaRua',
            '15B'
        )
    )
);

$contaDois = new ContaPoupanca(new Titular(
    new CPF('123.456.789-01'),
    'titular Dois',
    new Endereco(
        'São luís',
        'umBairro',
        'umaRua',
        '15A'
    )
));
$contaTeste->deposita(500);
try {
    $contaTeste->saca(600);
}catch (\Alura\Banco\Modelo\Conta\SaldoInsuficienteException $exception){
    echo $exception->getMessage();
}

var_dump($contaTeste);

