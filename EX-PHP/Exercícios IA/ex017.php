<?php
//Exercício 17 - Criar uma função que verifica se o usuário é maior ou menor de idade
function verficarIdade($num){
    if($num < 18){
        echo "Você é menor de idade";
    }else{
        echo "Você é maior de idade";
    }
}

$idade = 17;
verficarIdade($idade);
?>