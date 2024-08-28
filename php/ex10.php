<?php

function exibirArray($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo $numeros[0].'<br>';
echo $numeros[4].'<br>';
echo $numeros[9].'<br>';
exibirArray($numeros);

//Alterar os valores do array e exibir as alterações
$numeros[0] = 100;
$numeros[4] = 500;
$numeros[9] = 1000;

echo '<hr>';
echo 'Alterações<br>';

echo $numeros[0].'<br>';
echo $numeros[4].'<br>';
echo $numeros[9].'<br>';
exibirArray($numeros);

?>