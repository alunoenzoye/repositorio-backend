<?php
//Exercício 3

//Declarações
define('VALOR_DESCONTO', 500);
define('CLIENTE_VIP', 'vip');

$cliente_tipo = CLIENTE_VIP;
$valor_gasto = 500;


//Aplicar desconto baseado no valor da compra ou tipo de cliente

if ($cliente_tipo == CLIENTE_VIP || $valor_gasto > VALOR_DESCONTO) {
    echo 'Cliente com desconto aplicado';
} else {
    echo 'Cliente sem desconto';
}


?>
