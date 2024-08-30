<?php

$lista_coisas = [];

//Criando a primeira coluna da array multi dimensional
$lista_coisas['frutas'] = ['Banana', 'Maçã', 'Morango', 'Uva'];

//Criando a segunda coluna da array multi dimensional
$lista_coisas['pessoas'] = ['João', 'José', 'Maria'];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

//Alterar os valores da array
$lista_coisas['frutas'][2] = 'Abacaxi';
$lista_coisas['pessoas'][1] = 'Carlos';
$lista_coisas['pessoas'][2] = true;

echo 'O terceiro valor da array FRUTAS agora é: ';
echo $lista_coisas['frutas'][2];

echo '<hr>';

echo 'O segundo valor da array PESSOAS agora é: ';
echo $lista_coisas['pessoas'][1];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>'
?>