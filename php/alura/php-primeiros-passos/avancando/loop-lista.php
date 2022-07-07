<?php

/**
 * ITERANDO E IMPRIMINDO ITENS DE UMA LISTA
 */

$listaDeIdades = [21, 22, 25, 19, 17, 30, 31];

for ($i = 0; $i < count($listaDeIdades); $i++) {
    echo $listaDeIdades[$i] . PHP_EOL;
}
