<?php

//Iterar de 1 a 10 utilizando o for.
for ($i = 1; $i <= 10; $i++) {
    
    $categoria;
    $conjunto = ($i % 2 == 0) ? "par" : "impar"; //O número é par se o módulo é igual a 0.

    //Definir a categoria do número com um switch case
    switch ($i) {
        case $i <= 3:
            $categoria = 'baixo';
            break;
        
        case $i <= 7:
            $categoria = 'médio';
            break;
        
        case $i <= 10:
            $categoria = 'alto';
            break;

        default:
            $categoria = 'desconhecido';
            break;
    }

    //Exibir o número, sua categoria e em qual conjunto ele pertence.
    echo "O número $i é $conjunto e está na categoria $categoria.<br/>";
}

?>