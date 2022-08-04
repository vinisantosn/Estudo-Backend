<?php

//BUSCANDO INFORMAÇÕES ATRAVÉS DO TECLADO MEDIANTE
// AO USO DO STDIN
//$tecaldo = fopen('php://stdin', 't');
//
//$novoCurso = fgets($tecaldo);
//
//file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);

//MESMO RESULTADO PODE SER ALCANÇADO DA SEGUINTE MANEIRA
$novoCurso = fgets(STDIN);
file_put_contents('cursos-php.txt', "\n$novoCurso",FILE_APPEND);