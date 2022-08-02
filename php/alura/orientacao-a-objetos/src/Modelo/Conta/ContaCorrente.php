<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    public function transfere(Conta $contaDeposito, float $valorDeTransferencia): void
    {
        if ($valorDeTransferencia > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }

        $this->saca($valorDeTransferencia);
        $contaDeposito->deposita($valorDeTransferencia);

    }

    protected function percentualTarifa(): float
    {
        return 0.05;
    }
}