<?php

require_once 'ArquivoCsvDecode.php';

$arquivoCursosEmCsv = fopen('cursos.csv', 'r');

stream_filter_register('vini.decode', ArquivoCsvDecode::class );
stream_filter_append($arquivoCursosEmCsv,'vini.decode');

echo fread($arquivoCursosEmCsv, filesize('cursos.csv'));
