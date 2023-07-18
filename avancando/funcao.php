<?php

function sacar($conta, $valorASacar) {
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem ($mensagem) 
{
    echo $mensagem . '<br>';
}

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Breno',
        'saldo' => 1000
    ],

    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    '123.456.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 900
    ]

];

if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
    exibeMensagem("Você não pode sacar");
} else {
    $contasCorrentes['123.456.789-10']['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
    exibeMensagem( "Você não pode sacar");

} else {
    $contasCorrentes['123.456.789-11']['saldo'] -= 500;
}

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 500);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}

//exemplo
function soma($numero1, $numero2)
{
    return $numero1 + $numero2;
}
$resultado = soma(2, 2);

