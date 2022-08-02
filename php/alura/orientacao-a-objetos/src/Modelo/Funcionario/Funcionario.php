<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF, Pessoa};


abstract class Funcionario extends Pessoa
{


    private float $salario;

    /**
     * @param string $nome
     * @param CPF $cpf
     */
    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    /**
     * @return string
     */


    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;


    public function recebeAumento(float $valorDoAumento): void
    {
        if ($valorDoAumento<0){
            echo "O aumento deve ser positivo. ";
            return;
        }
        $this->salario+=$valorDoAumento;
    }


}