<?php
//Valor a pesquisar
$valor_pesquisado = 'banana';

//Array contendo as frutas
$frutas = array('maçã', 'banana', 'laranja');

//Procurar pelo índice que contém o valor 'banana'
$indice = array_search($valor_pesquisado, $frutas);

//Verifica se o $indice não é igual a false, indicando que há um índice com o valor
if ($indice !== false) {
    //Se a banana não for encontrada
    echo "O $valor_pesquisado foi encontrada na posição".$indice;
} else {
    //No caso oposto
    echo "O $valor_pesquisado não foi encontrada na lista de frutas.";
}

?>