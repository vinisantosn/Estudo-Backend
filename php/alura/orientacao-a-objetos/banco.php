<?php

require_once 'autoload.php';

/**require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';*/

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco("São luis", "COHAMA", "R. dos passaros", "19");
$vinicius = new Titular(new CPF('123.456.789-00'), "Vinicius Santos", $endereco);
//$primeiraConta = new Conta($vinicius);#não pode ser instanciada pois é uma classe abstrata
//$primeiraConta->deposita(500);
//$primeiraConta->saca(300.46);


//echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
//echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
//echo $primeiraConta->recuperaSaldo() . PHP_EOL;
//var_dump($primeiraConta);

$patricia = new Titular(new CPF('123.456.789-01'), "george", $endereco);
//$segundaConta = new Conta($patricia);
//var_dump($segundaConta);

//new Conta(new Titular(new CPF('123.456.789-09'), "georgiano"));
echo Conta::recuperaNumeroDeContas();
