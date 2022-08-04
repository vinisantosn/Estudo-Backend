<?php

//COMPREENDO UM POUCO SOBRE DIRETORIOS

$diretorioAtual = dir('.');

//echo $diretorioAtual->path.PHP_EOL;

while ($arquivo = $diretorioAtual->read()){
    echo $arquivo.PHP_EOL;
}