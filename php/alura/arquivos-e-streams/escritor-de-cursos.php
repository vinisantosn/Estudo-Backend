<?php
//INSERINDO INFORMAÇÕES LINHA A LINHA MUDANDO A FORMA
//EM QUE SÃO INSERIDOS ATRAVES DO r,w,a,x... +
//$arquivo = fopen('cursos-php.txt', 'a');
//
//$curso = "\nDesign Patterns PHP II: Boas práticas de programação";
//
//fwrite($arquivo,$curso);
//
//fclose($arquivo);

//OUTRA MANEIRA É:
$curso = "Design Patterns PHP I: Boas práticas de programação";
file_put_contents('cursos-php.txt',$curso);
$cursoDois = "\nDesign Patterns PHP II: Boas práticas de programação";
file_put_contents('cursos-php.txt',$cursoDois,FILE_APPEND);
