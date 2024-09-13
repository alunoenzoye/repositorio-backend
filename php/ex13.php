<?php

$nomes = ['Enzo', 'Gabriel', 'Hamilton', 'Felipe', 'Arthur', 'Vinicius', 'Guilherme', 'Joao', 'Ricardo'];

//Pesquisar o índice contendo o nome desejado.
$nome_pesquisado = 'Hamilton';
$indice = array_search($nome_pesquisado, $nomes);

if ($indice !== false) {
    //Se o nome pesquisado existir na array:
    echo "O nome $nome_pesquisado está no índice $indice.";
} else {
    echo "Este nome não foi encontrado no banco de dados.";
}
?>