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

unset($contasCorrentes['123.456.789-10']); // unset tira da lista

titularComLetrasMaiusculas($contasCorrentes['123.456.789-11']);

/* echo "<ul>";

foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($onta);
} 

echo "</ul>"; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <DL>
        <?php foreach($contasCorrentes as $cpf =>$conta) {?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dt>
            Saldo: <?= $conta['saldo'] ?>;
        </dt>
        <?php } ?>  
    </DL>
</body>
</html>