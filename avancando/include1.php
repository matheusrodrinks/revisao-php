<?php
//Incluindo esse arquivo com o include2.php



//posso tbm chamar ouitro arquivo com (require_once)

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
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorDepositar): array {
    if($valorDepositar > 0) {
        $conta['saldo'] += $valorDepositar;
    } else {
        //exibeMensagem("Número inválido"); 
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta) { //& -> INFORMA QUE ESTÁ REBENDO UMA REFERÊNCIA, OU SEJA A CONTA EM SI. Mas, tem controle de modificar totalmente o código.
    
    $conta['titular'] = strtoupper($conta['titular']);
    
} 

function exibeConta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}