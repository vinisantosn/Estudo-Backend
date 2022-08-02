<?php

namespace Alura\Banco\Modelo\Conta;


abstract class Conta
{

    private Titular $titular;
    protected $saldo;
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
        $tarifaDeSaque = $valorDeSaque * $this->percentualTarifa() ;
        $valorDeSaqueComTarifa = $valorDeSaque + $tarifaDeSaque;
        if ($valorDeSaqueComTarifa > $this->saldo) {
            echo "Saldo Indisponivel";
            return;
        }
        $this->saldo -= $valorDeSaqueComTarifa;

    }

    public function deposita(float $valorDeDeposito): void
    {
        if ($valorDeDeposito < 0) {
            echo "Valor invalido";
            return;
        }

        $this->saldo += $valorDeDeposito;

    }



    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }


    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;


}
