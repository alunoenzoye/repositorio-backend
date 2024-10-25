<?php

session_start();

$usuario_autenticado = false;

// Placeholder simulando um banco de dados contendo os cadastros dos usuários
$usuarios_cadastrados = [
    [
        "email" => "enzo@example.com", 
        "senha" => "123456"
    ],
    [
        "email" => "admin@senai.br", 
        "senha" => "12345"
    ],
    [
        "email" => "aluno@senai.br", 
        "senha" => "abcde"
    ],
    [
        "email" => "suporte@senai.br", 
        "senha" => "1a2b3c"
    ],
];

// Validar os dados enviados pelo método POST através de uma busca no "banco de dados"
foreach ($usuarios_cadastrados as $user) {
    $post_email = $_POST['email'];
    $post_senha = $_POST['senha'];

    $user_email = $user['email'];
    $user_senha = $user['senha'];

    if (($post_email == $user_email) && ($post_senha == $user_senha)) {
        $usuario_autenticado = true;
        break;
    }   
}

// Guardar na SESSION o estado de autenticação do usuário e redirecionar-lo.
if ($usuario_autenticado) {
    $_SESSION['autenticado'] = true;
    header('location: ../app_help_desk/painel.php');
}
else {
    $_SESSION['autenticado'] = false;
    header("location: ../app_help_desk/pagina_login.php?login=erro");
}