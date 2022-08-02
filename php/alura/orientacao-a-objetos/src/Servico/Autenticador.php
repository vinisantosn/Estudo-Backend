<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Autenticavel;


class Autenticador
{
    public function tentalogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)){
            echo "Ok. Usuário logado no sistema.";

        }else{echo "Ops. Senha incorreta.";}


    }
}