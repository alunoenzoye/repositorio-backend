<?php

class Funcionario {
    // Membros públicos
    public $nome = "Enzo";
    public $telefone = null;
    public $numFilhos = 2;

    // Métodos públicos
    function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($filhos) {
        $this->numFilhos = $filhos;
    }

    function modificarNome($nome) {
        $this->nome = $nome;
    }
}

// Criação de instâncias da classe
// Aqui testamos os métodos criados na classe
$instancia = new Funcionario();
echo $instancia -> resumirCadFunc();
echo "<hr>";

$instancia2 = new Funcionario();
$instancia2->modificarNumFilhos(3);
echo $instancia2->resumirCadFunc();
echo "<hr>";

$instancia2 = new Funcionario();
$instancia2->modificarNome("José");
echo $instancia2->resumirCadFunc();
echo "hr";