<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    /**
     * @param string $nome
     * @param CPF $cpf
     */
    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome invalido";
            exit();
        }


    }


}