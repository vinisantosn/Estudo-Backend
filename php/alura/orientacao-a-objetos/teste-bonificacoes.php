<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Funcionario,Gerente,Diretor,Desenvolvedor,EditorDeVideo};

$funcionarioUm = new Desenvolvedor(
    'Vinicius Santos ',
    new CPF('123.456.789-00'),

    5000
);

$funcionarioDois = new Gerente(
    'Mateus ',
    new CPF('123.456.789-01'),

    7000
);

$funcionarioTres = new Diretor(
    'Maria ',
    new CPF('123.456.789-02'),

    7000
);

$funcionarioQuatro = new EditorDeVideo(
    'José ',
    new CPF('123.456.789-03'),

    3500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($funcionarioUm);
//$controlador->adicionaBonificacao($funcionarioDois);
$controlador->adicionaBonificacao($funcionarioTres);
$controlador->adicionaBonificacao($funcionarioQuatro);
echo $controlador->recuperaTotalDeBonificacoes().PHP_EOL;
echo PHP_EOL;
echo $funcionarioUm->recuperaSalario().PHP_EOL;
echo $funcionarioDois->recuperaSalario().PHP_EOL;
echo $funcionarioTres->recuperaSalario().PHP_EOL;