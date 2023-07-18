<?php
// Primeira forma de fazer
$conta1 = [
    'titular' => 'Vinícius',
    'saldo' => 1000

];
$conta2 = [
    'titular' => 'Matheus',
    'saldo' => '0'
];
$conta3 = [
    'titular' => 'Raquel',
    'saldo' => '3000'
];

$contasCorrentes = [
    $conta1, 
    $conta2,
    $conta3
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

//Segunda forma de fazer, simplificando-o.

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12310056780 => [
        'titular' => 'Matheus',
        'saldo' => '0'
    ],
    12340017298 => [
        'titular' => 'Raquel',
        'saldo' => '3000'
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
};