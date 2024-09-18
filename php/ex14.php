<?php

//Array contendo subarrays que representam um registro com chaves para id, nome e email.
$usuarios = [
    [
        'id' => 1,
        'nome' => 'Joao',
        'cidade' => 'Tietê',
        'estado' => 'SP'
    ],
    [
        'id' => 2,
        'nome' => 'Maria',
        'cidade' => 'Cerquilho',
        'estado' => 'SP'
    ],
    [
        'id' => 3,
        'nome' => 'Pedro',
        'cidade' => 'São Paulo',
        'estado' => 'SP'
    ],
    [
        'id' => 4,
        'nome' => 'Enzo',
        'cidade' => 'Sorocaba',
        'estado' => 'SP'
    ],
    [
        'id' => 5,
        'nome' => 'Hamilton',
        'cidade' => 'Maringa',
        'estado' => 'PR'
    ]
];

//Variável contendo o email a buscar na matrix
$busca = 'Pedro';

//Exibir o array para depuração
echo '<pre>';
print_r($usuarios);
echo '</pre>';

//Procura o valor na variável $busca no array multidimensional na coluna email.
$indice = array_search($busca, array_column($usuarios, 'nome'));
if ($indice !== false) {
    //Caso o email foi encontrado
    echo "$busca foi encontrado com o ID: ".$usuarios[$indice]['id'];
} else {
    echo "$busca não foi encontrada na lista de usuários.";
}

?>