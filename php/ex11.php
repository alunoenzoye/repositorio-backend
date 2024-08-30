<?php

$Cadastro = [];

//Definir as colunas do array
$Cadastro['usuario'] = ['Joao', 'Maria', 'Pedro'];
$Cadastro['senha'] = ['1234', 'abcd', '5678'];

//Alterar o Cadastro
$Cadastro['usuario'][1] = 'Ana';
$Cadastro['senha'][1] = 'efgh';

//Exibir alterações
echo '<pre>';
print_r($Cadastro);
echo '</pre>';

?>