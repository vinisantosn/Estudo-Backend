<?php

/** EXEMPLO DE FUNÇÃO */
// function adiciona5($x)
// {
//     return $x + 5;
// }

// $resultado = adiciona5(13);

// echo $resultado;
// exit();



//subrotina (Ñ RETORNA VALOR)  ou funcões (RETORNA VALOR)
function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function sacarDe(array $conta, float $valor): array
{
    if ($valor > $conta['saldo']) {
        echo "Saldo indisponivel" . PHP_EOL;
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function depositarEm(array $conta, float $valor): array
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem("DEPOSITO INVALIDO");
    }

    return $conta;
}

function extratoDeContas($contas)
{
    /**
     * 
     * PARA ACESSAR UM ARRAY ASSOCIATIVO DENTRO DE UMA STRING
     * BASTA RETIRAR AS ASPAS SIMPLES DAS CHAVES OU CONTORNAR 
     * COM CHAVES. 
     * 
     */
    exibeMensagem("\t EXTRATO DE CONTAS");
    foreach ($contas as $cpf => $conta) {
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        exibeMensagem("$cpf \t  {$conta['titular']}  \t  $saldo");
    }
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}


// PHP NA WEB

function exibeConta(array $contas)
{
    exibeMensagem("CONTAS");
    foreach ($contas as $cpf => $conta) {

        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        echo "<li> Titular: $titular. Saldo: $saldo </li> ";
    }
}
