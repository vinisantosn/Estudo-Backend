<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Funcionario,Diretor};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Servico\Autenticador;

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João Silva',
    new CPF('123.456.789-00'),
    10000
);

$autenticador->tentalogin($umDiretor, '1234');