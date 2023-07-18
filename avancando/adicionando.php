<?php

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

$contasCorrentes['040.728.142-88'] = [
   'titular' => 'claudia',
   'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
};