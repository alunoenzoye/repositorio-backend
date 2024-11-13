<?php

require_once ('class_Coordenador.php');

// Vamos instanciar um objeto da classe coordenador para testar os seus métodos e atributos

$coordenador = new Coordenador();
$coordenador->nome = "Saulo";
$coordenador->departamento = "Coordenação";

echo $coordenador->nome;
echo "<hr>";
echo $coordenador->departamento;
echo "<hr>";
// Os atributos salário e cpf não são acessíveis externalmente por que são protected e private,
// tentar chama-los resultaria em um erro.

$coordenador->auxiliarProfessores();
echo "<hr>";
$coordenador->coordenar();
echo "<hr>";
$coordenador->planejarAulas();

// A mesma coisa se aplica para os métodos definir horários e organizar reuniões