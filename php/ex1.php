<?php
//Exercício 1

//Notas do aluno

$nota1 = 10;
$nota2 = 10;
$nota3 = 10;

$media = ($nota1 + $nota2 + $nota3) / 3;


//Exibir as notas

echo "Nota da primeira prova: $nota1<br/>";
echo "Nota da primeira prova: $nota2<br/>";
echo "Nota da primeira prova: $nota3<br/>";


//Exibir o resultado de acordo com a média final e a nota mínima para ser aprovado.

if ($media >= 7) {
    echo 'O aluno está aprovado.';
} else {
    echo 'O aluno está reprovado.';
}

?>
