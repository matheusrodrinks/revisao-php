<?php

require_once 'include1.php';

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

titularComLetrasMaiusculas($contasCorrentes['123.456.789-11']);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']
    );
}

