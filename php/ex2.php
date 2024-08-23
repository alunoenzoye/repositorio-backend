<?php
//Exercício 2

//Variáveis

define('BONUS_20', 0.2);
define('BONUS_10', 0.1);
$salario = 3000;
$horas_extra = 11;

//Exibir o bônus do funcionário de acordo com seu salário e a quantidade de horas extra.

if ($salario < 2000 && $horas_extra > 10) {
    $salario *= (1 + BONUS_20);
    echo 'O bônus do salário do funcionário é de 20%!';
} elseif ($salario >= 2000 && $horas_extra > 5) {
    $salario *= (1 + BONUS_10);
    echo 'O bônus do salário do funcionário é de 10%!';
} else {
    echo 'Não há bônus no salário';
}

echo '<br/>';
echo "Horas extras: $horas_extra<br/>";
echo "O seu salário final é de: $salario"

?>
