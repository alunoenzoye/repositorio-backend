<?php
include_once ("./lib/html_tags.php");
include_once ("./lib/debug.php");
require_once ("login.php");

// pre_decorator(function(){
//     print_r($_POST);
// });

// echo TAG_HR;

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

// Se o arquivo registro.csv não existir, criar ele
// Abra o arquivo no modo append e insira os campos
// Por fim, feche o arquivo
$arquivo = fopen("../../app_help_desk_hidden/registros/registro.csv", "a");
fputcsv($arquivo, [$titulo, $categoria, $descricao]);
fclose($arquivo);

header("location: painel.php");