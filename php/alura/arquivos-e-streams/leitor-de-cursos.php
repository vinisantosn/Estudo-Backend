<?php

//$arquivo = fopen('lista-de-cursos.txt', 'r');

/**
 * while (NÃO CHEGAR AO FIM DO ARQUIVO){
 *      LER UMA LINHA
 * }
 * FECHAR ARQUIVO
 */
//OPÇÃO PARA LEITURA DE ARQUIVOS GRANDES
//while(!feof($arquivo)){
//    $curso = fgets($arquivo);
//    echo $curso;
//}
//
//fclose($arquivo);

//ABRE O ARQUIVO DE MANEIRA TOTAL DE UMA VEZ SÓ
//$tamanhoDoArquivo = filesize('lista-de-cursos.txt');
//$cursos = fread($arquivo, $tamanhoDoArquivo);
//echo $cursos;
//fclose($arquivo);

//ABRE E FECHA UM ARQUIVO
//$cursos = file_get_contents('lista-de-cursos.txt');
//echo $cursos;

$cursos = file('lista-de-cursos.txt');
var_dump($cursos);