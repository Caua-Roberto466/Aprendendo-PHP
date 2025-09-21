<?php 
//Funções em php
function calcular($num1, $num2){
    $soma = $num1 + $num2;
    return $soma;
}

$numero1 = 8;
$numero2 = 9;
echo calcular($numero1, $numero2);

function comprimentar($nome){
    echo "<br>Olá $nome! Bem vindo ao meu código";
}

$pessoa = 'Carlos';
comprimentar($pessoa);
?>