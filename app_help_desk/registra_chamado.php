<?php
include_once ("./lib/html_tags.php");
include_once ("./lib/debug.php");
include_once ("login.php");

pre_decorator(function(){
    print_r($_POST);
});

echo TAG_HR;

$variavel_titulo = $_POST['titulo'];
$variavel_categoria = $_POST['categoria'];
$variavel_descricao = $_POST['descricao'];

$texto = $variavel_titulo."\n".$variavel_categoria."\n".$variavel_descricao."\n";
echo $variavel_titulo.TAG_BR.$variavel_categoria.TAG_BR.$variavel_descricao.TAG_BR;

// Se o arquivo registro.txt não existir, criar ele
// Abra o arquivo no modo append e insira a string $texto
// Por fim, feche o arquivo
$arquivo = fopen("./registros/registro.txt", "a");
fwrite($arquivo, $texto);
fclose($arquivo);