<?php
class Coordenador {
    public $nome = null;
    public $departamento = null;
    protected $salario = null;
    private $cpf = null;

    public function coordenar () {
        echo "$this->nome está coordenando.";
    }
    
    public function planejarAulas () {
        echo "$this->nome está planejando aulas.";
    }
    
    public function auxiliarProfessores () {
        echo "$this->nome está auxiliando os professores.";
    }

    private function definirHorarios () {
        echo "$this->nome está definindo os horários.";
    }

    private function organizarReunioes () {
        echo "$this->nome está organizando reuniões.";
    }
}