<?php

class Conta
{

    private Titular $titular;
    private $saldo;
    public static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {

        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;


    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }



    public function saca(float $valorDeSaque): void
    {
        if ($valorDeSaque > $this->saldo) {
            echo "Saldo Indisponivel";
            return;
        }

        $this->saldo -= $valorDeSaque;

    }

    public function deposita(float $valorDeDeposito): void
    {
        if ($valorDeDeposito < 0) {
            echo "Valor invalido";
            return;
        }

        $this->saldo += $valorDeDeposito;

    }

    public function transfere(Conta $contaDeposito, float $valorDeTransferencia): void
    {
        if ($valorDeTransferencia > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }

        $this->saca($valorDeTransferencia);
        $contaDeposito->deposita($valorDeTransferencia);

    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }



    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }


}
