<?php

//Cria um array chamado frutas contendo três elementos: maçã, banana e laranja.
$frutas = array("maçã", "banana", "laranja", "morango");

$item_pesquisado = "morango";

//Verifica se "banana" está presente no arary $frutas.
if (in_array($item_pesquisado, $frutas)) {
    //Se "morango" estiver no array, exibe a mensagem "Morango está na lista de frutas."
    echo "O $item_pesquisado está na lista de frutas.";
} else {
    //No caso em que "morango" não estiver no array, exibir uma outra mensagem
    echo "O $item_pesquisado não está na lista de frutas.";
}

?>