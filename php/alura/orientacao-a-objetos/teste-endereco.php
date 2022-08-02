<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$enderecoUm = new Endereco(
    "São luis",
    "COHAMA",
    '10B',
    '2'
);
$enderecoDois = new Endereco(
    "São Jose de Ribamar",
    "Maiobão",
    '10A',
    '3'
);

echo $enderecoUm->bairro.PHP_EOL;
$enderecoUm->bairro ="Cohajap";
echo $enderecoUm->bairro;

