<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo "<h1> Bem vindo, $email </h1>";

        //Exibe as informações enviadas pelo método POST na página index.php através do form
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        echo "<hr>";

        echo "Seu email é:";
        echo "$email";
        echo "<br>";
        echo "E sua senha é:";
        echo "$senha";
    ?>

<?php
    $array = [[1 ,2], [1, 3]];
    $filtro = 1;

    // Iterar sobre todos os valores na array multidimensional
    foreach($array as $valor) {
        foreach ($valor as $v) {
            // Somente executar o código se o valor não é nulo
            if (isset($v)) {
                if ($v == $filtro) {
                    echo "<br>sucesso";
                }
            }
        }
       
    }
?>
</body>
</html>