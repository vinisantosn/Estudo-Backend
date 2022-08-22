<?php

namespace Alura\Banco\Modelo\Conta;

use DomainException;

class SaldoInsuficienteException extends DomainException
{
    public function __construct(float $valorDeSaque, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar $valorDeSaque, mas tem apenas $saldoAtual em conta. ";
        parent::__construct($mensagem);
    }

}