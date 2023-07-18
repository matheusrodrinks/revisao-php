<?php

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

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}