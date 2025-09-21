<?php 
//Exercício 18 - Criar uma função que recebe duas notas e faz a média, e dependendo dela você exibe alguma mensagem específica
function verficarMedia($num1, $num2){
    $media = ($num1 + $num2) / 2;
    if($media < 6){
        echo "Você foi reprovado";
    }elseif($media < 8){
        echo "Você está de recuperação";
    }elseif($media < 11){
        echo "Você foi aprovado";
    }else{
        echo "Valor inválido, O valor permito é entre 0 e 10";
    }
}

$nota1 = 18;
$nota2 = 6;

verficarMedia($nota1,$nota2);
?>