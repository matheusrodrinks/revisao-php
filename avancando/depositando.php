<?php

function sacar(array $conta, float $valorASacar): array { //tipo de dado que estou retornando
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem (string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorDepositar): array {
    if($valorDepositar > 0) {
        $conta['saldo'] += $valorDepositar;
    } else {
        exibeMensagem("Número inválido"); 
    }
    return $conta;
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

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'], 
    500);

$contasCorrentes['123.456.789-12'] = sacar(
    $contasCorrentes['123.456.789-12'], 
    200);

$contasCorrentes['123.456.789-11'] = depositar(
    $contasCorrentes['123.456.789-11'],
    -300
);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']
    );
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']
    );
}





