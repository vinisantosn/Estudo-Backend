<?php
/**
 * TIPOS DE SAIDAS NA TELA
 * ECHO
 * PRINT
 * E EM FORMA DE ARQUIVO COM O STDOUT
 */

$msg1 = "OLA MUNDO 01";
$msg2 = "OLA MUNDO 02";
$msg3 = "OLA MUNDO 03";

echo $msg1.PHP_EOL;
print $msg2.PHP_EOL;

//$tela = fopen('php://stdout', 'w');
//fwrite($tela, $msg3);
//OU
fwrite(STDOUT,$msg3.PHP_EOL);

$leitorZip = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($leitorZip,STDOUT);