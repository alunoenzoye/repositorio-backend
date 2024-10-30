<?php

class Livro {
    public $titulo = "Dragon Ball";
    public $autor = "Akira Toriyama";
    public $anoPublicacao = 1985;

    function exibirDetalhes() {
        return "O livro $this->titulo escrito por $this->autor foi publicado em $this->anoPublicacao";
    }

    function alterarAnoPublicacao($ano) {
        $this->anoPublicacao = $ano;
    }
}

// Testar a classe Livro e seus métodos.
$livro = new Livro();

echo $livro->exibirDetalhes();
echo "<hr>";

$livro->alterarAnoPublicacao(2000);
echo $livro->exibirDetalhes();
echo "<hr>";