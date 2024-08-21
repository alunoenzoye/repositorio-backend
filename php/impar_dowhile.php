<?php

define('numero_max', 115);

$contador = 1;

do {
    //Exibir o contador e pular uma linha
    echo "$contador <br/>";

    //Certifica que o próximo número na iteração seja impar desde que o contador começe como impar.
    $contador += 2;
} while($contador <= numero_max);

?>