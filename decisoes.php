<?php

$idade = 19;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais do que 18 anos. " . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar". PHP_EOL ;
   
} else if ($idade >= 16 && $numeroDePessoas >= 1) {
    echo "Você tem $idade anos, está acompanhado, pode entrar";
} else 
    echo "Você só tem $idade anos. Você não pode entrar";
   

echo PHP_EOL;
echo "adeus";