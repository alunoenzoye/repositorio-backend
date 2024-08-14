<?php

//Exemplo do operador ternário para definir o texto de saída baseado na idade.

$idade = 17;
$resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo "$resultado <br/>";


//Exemplo para checar o nome.

$nome = "Enzo";
$mensagem = ($nome == "Enzo") ? "Olá, Enzo!" : "Olá, visitante!";
echo "$mensagem <br/>";


//Exemplo para ver se estamos logado.

$is_logged_in = false;
$mensagem = $is_logged_in ? 'Bem vindo de volta!' : 'Por favor, faça login.';
echo "$mensagem <br/>"

?>
