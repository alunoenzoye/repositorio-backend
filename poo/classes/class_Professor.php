<?php
class Professor {
    public $nome = null;
    public $disciplina = null;
    protected $salario = null;
    private $cpf = null;

    public function ensinar () {
        echo "$this->nome está ensinando $this->disciplina.";
    }
    
    public function corrigirProva () {
        echo "$this->nome está corrigindo prova.";
    }
    
    public function prepararAula () {
        echo "$this->nome está preparando uma aula.";
    }

    private function fazerChamada () {
        echo "$this->nome está fazendo a chamada.";
    }

    private function corrigirTarefa () {
        echo "$this->nome está corrigindo tarefa.";
    }
}