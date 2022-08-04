<?php
require_once 'MeuFiltro.php';

$arquivoCursos = fopen('lista-de-cursos.txt', 'r');

stream_filter_register('vini.partes', MeuFiltro::class);
stream_filter_append($arquivoCursos,'vini.partes');

echo fread($arquivoCursos, filesize('lista-de-cursos.txt'));