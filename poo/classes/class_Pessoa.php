<?php
class Pessoa {
    public $nome = null;
    public $idade = null;
    protected $cpf = null;
    protected $endereco = null;

    public function apresentar () {
        echo "$this->nome está apresentando.";
    }
    
    public function caminhar () {
        echo "$this->nome está caminhando.";
    }
    
    public function falar () {
        echo "$this->nome está falando.";
    }

    private function comer () {
        echo "$this->nome está comendo.";
    }

    private function dormir () {
        echo "$this->nome está dormindo.";
    }
}