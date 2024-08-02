<?php

$nome = 'Enzo';
$escola = 'SESI Cerquilho';
$CE = 428;
$cidade = 'Cerquilho';
$curso = 'Desenvolvimento de Sistemas';
$media = 6.5;

//Exibir as variáveis na pagina.

echo 'Olá, bem vindo ao SESI-SP<br>';

echo $nome, '<br>'; //Também funciona >echo "$nome <br>";<
echo $escola, '<br>';
echo $CE, '<br>';
echo $curso, '<br>';
echo $media, '<br>';

echo "Ola $nome, bem vindo ao SESI $CE de $cidade, sua nota no curso de $curso e: $media";

?>