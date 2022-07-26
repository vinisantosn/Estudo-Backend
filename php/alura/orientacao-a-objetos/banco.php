<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';


$vinicius = new Titular(new Cpf('123.456.789-00'), "Vinicius Santos");
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300.46);


echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
var_dump($primeiraConta);

$patricia = new Titular(new Cpf('123.456.789-01'), "george");
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

new Conta(new Titular(new Cpf('123.456.789-09'), "georgiano"));
echo Conta::recuperaNumeroDeContas();
