<?php

class Aluno {
    public $nome = "Enzo";
    public $idade = 17;
    public $curso = "DEV.";

    function exibirDadosAluno() {
        return "$this->nome tem $this->idade anos e faz o curso de $this->curso no SENAI.";
    }

    function alterCurso($curso) {
        $this->curso = $curso;
    }
    
}

// Vamos testar a classe Aluno e seus métodos através de uma instância.
$aluno = new Aluno();

echo $aluno->exibirDadosAluno();
echo "<hr>";

$aluno->alterCurso("MULT.");
echo $aluno->exibirDadosAluno();
echo "<hr>";