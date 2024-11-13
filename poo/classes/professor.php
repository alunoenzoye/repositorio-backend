<?php

require_once ('class_Professor.php');

// Vamos instanciar um objeto da classe professor para testar os seus métodos e atributos

$professor = new Professor();
$professor->nome = "Teles";
$professor->disciplina = "Computação";

echo $professor->nome;
echo "<hr>";
echo $professor->disciplina;
echo "<hr>";
// Os atributos salário e cpf não são acessíveis externalmente por que são protected e private,
// tentar chama-los resultaria em um erro.

$professor->ensinar();
echo "<hr>";
$professor->corrigirProva();
echo "<hr>";
$professor->prepararAula();

// A mesma coisa se aplica para os métodos fazer chamada e corrigir tarefa.