<?php

$numeroSolicitado = 9; //Varíavel representando o número solicitado pelo usuário
$numeroSolicitado = ceil($numeroSolicitado);

//Validar o número para ver se ele é positivo
if ($numeroSolicitado < 1) {
    echo "Número solicitado inválido";
    return;
}

$contador = 1;
while ($contador <= $numeroSolicitado) {
    //Exibir o número se ele for par
    if (($contador % 2) == 0) {
        echo "$contador <br/>";
    }

    $contador++; 
}

?>