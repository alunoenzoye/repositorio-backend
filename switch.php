<?php
//Exemplo que exibe texto baseado em uma cor escolhida.

$cor_escolhida = "verde";

switch ($cor_escolhida) {
    case "vermelho":
        echo "Você escolheu a cor vermelha.";
        break;

    case "azul":
        echo "Você escolheu a cor azul.";
        break;
    
    case "verde":
        echo "Você escolheu a cor verde.";
        break;

    default:
        echo "Cor não disponível.";
        break;
}

?>