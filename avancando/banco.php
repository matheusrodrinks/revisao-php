<?php



function exibeMensagem ($mensagem) 
{
    echo $mensagem . PHP_EOL;
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


foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem("$cpf $titular $saldo");
}