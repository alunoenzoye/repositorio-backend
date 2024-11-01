<?php

class Funcionario {
    // Campos da classe
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    // Vamos encapsular os campos da classe e expor acesso aos campos através dos métodos SETTER e GETTER
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function getNome() {
        return $this->nome;
    }

    function getNumFilhos() {
        return $this->numFilhos;
    }

    function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filho(s)";
    }
}

$funcionario = new Funcionario();
$funcionario->setNome("Enzo");
$funcionario->setNumFilhos(2);

// echo $funcionario->resumirCadFunc();
echo $funcionario->getNome()." possui ".$funcionario->getNumFilhos()." filho(s)";