<?php

echo file_get_contents('zip://arquivos.zip#lista-de-cursos.txt');
$contexto = stream_context_create([
    'zip' => [
        'password'=>'123456'
    ]
]);
echo file_get_contents('zip://arquivos-com-senha.zip#lista-de-cursos.txt',false,$contexto);