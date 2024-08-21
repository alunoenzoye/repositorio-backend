<?php

$numeroTabuada = 1; // Indica o número selecionado para exibir a tabuada.

//Exibe em uma linha a multiplicação da tabuada
function exibirMultiplicacao($numero, $multiplicador, $resultado) {
    echo "$numero x $multiplicador = $resultado <br/>";
}

//Fazer a tabuada do número selecionado de 1 a 10
for ($i = 1; $i <= 10; $i++) {

    //Multiplicar o número da tabuada pelo iterador para obter o resultado;
    $resultado = $numeroTabuada * $i;

    exibirMultiplicacao($numeroTabuada, $i, $resultado);
    
}

?>