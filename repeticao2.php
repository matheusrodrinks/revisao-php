<?php

for ($contador = 1; $contador <= 15; $contador++ ) {
    if ($contador == 13) {
        continue; // Posso usar o break tbm para quebrar o loop ao invés de pular
    } 
    
    echo "#$contador" . PHP_EOL;
    
}

// Quando se sabe o limite que é costume de usar for