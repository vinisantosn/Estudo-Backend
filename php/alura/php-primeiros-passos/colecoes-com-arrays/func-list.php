<?php

$dados = ['Vinicius', 9.8, 22];

// ALTERNATIVA COMUM MAS NÃO USUAL 
/**
 *
 *  $nome = $dados[0];
 * $nota = $dados[1];
 * $idade = $dados[2];
 * 
 */

// ALTERNATIVA MAIS ADEQUADA -> ENVOLVE CONCEITO DE TUPLAS (SIMILAR)
list($nome, $nota, $idade) = $dados;
// [$nome, $nota, $idade] = $dados; 

/**
 * /// PARA CHAVES EM STRING, DEVEMOS APONTA-LAS NA LIST
 * // EX.:
 * 
 * $dados = [
 *      'NOME' => Vinicius',
 *      'NOTA' => 9.8,
 *      'IDADE' => 22
 * ];
 * 
 * ['NOME' => $nome, 'NOTA' => $nota, 'IDADE' => $idade] = $dados; 
 * 
 * // OU ATRAVES DO EXTRACT
 * extract($dados);
 */


var_dump($nome,$nota,$idade);