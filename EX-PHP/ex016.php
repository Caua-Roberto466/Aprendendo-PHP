<?php 
//Exercício 16 - Criar uma função com dois parâmetros, pegar dois número e chamar a função
function somar($num1,$num2){
    $soma = $num1 + $num2;
    return $soma;
}

$saque1 = 200;
$saque2 = 350;
$total = somar($saque1 , $saque2);
echo "O total de saque foi $total";
?>