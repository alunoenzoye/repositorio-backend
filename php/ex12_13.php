<?php
//Exercício 12
//Criando o array multidimensional
$array_cadastro = [];

//Coluna nome
$array_cadastro['nome'] = ['Enzo', 'Felipe', 'Gabriel', 'Hamilton', 'Arthur'];

//Coluna e-mail
$array_cadastro['e-mail'] = ['b@gmail.com', 'd@hotmail.com', 'g@outlook.com', 'f@gmail.com', 'd@mail.com'];

//Exibir informações

echo '<pre>';
print_r($array_cadastro);
echo '<hr>';
echo $array_cadastro['nome'][2];
echo '<br>';
echo $array_cadastro['e-mail'][3];
echo '</pre>';


//Exercício 2
$array_cadastro['nome'][2] = 'SENAI';
$array_cadastro['e-mail'][0] = 'aluno@SENAI.BR';

echo '<pre>';
print_r($array_cadastro);
echo '</pre>';

?>