<?php

require_once ('class_Pessoa.php');

// Vamos instanciar um objeto da classe pessoa para testar os seus métodos e atributos

$pessoa = new Pessoa();
$pessoa->nome = "Enzo";
$pessoa->idade = 17;

echo $pessoa->nome;
echo "<hr>";
echo $pessoa->idade;
echo "<hr>";
// Os atributos endereco e cpf não são acessíveis externalmente por que são protected e private,
// tentar chama-los resultaria em um erro.

$pessoa->caminhar();
echo "<hr>";
$pessoa->apresentar();
echo "<hr>";
$pessoa->falar();

// A mesma coisa se aplica para os métodos comer e dormir.