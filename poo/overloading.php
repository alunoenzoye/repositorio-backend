<?php

class Funcionario {
    // Campos da classe
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    // Vamos encapsular os campos da classe e expor acesso aos campos através dos métodos SETTER e GETTER
    // Os métodos de tipo overloading permitem a pattern setter e getter ser aplicada a todos os campos da classe
    function __set($campo, $valor) {
        $this->$campo = $valor;    
    }

    function __get($campo) {
        return $this->$campo;
    }

    function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filho(s)";
    }
}

$funcionario = new Funcionario();
$funcionario->__set("nome", "Enzo");
$funcionario->__set("numFilhos", 0);

// echo $funcionario->resumirCadFunc();
echo $funcionario->__get("nome")." possui ".$funcionario->__get("numFilhos")." filho(s)";