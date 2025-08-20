<?php 
    //Exercício 1
    $num1 = 4;
    $num2 = 3;
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    $divisao = $num1 / $num2;

    echo "A soma é $soma <br>
    A subtração é $subtracao<br>
    A multiplicação é $multiplicacao<br>
    A divisão é $divisao<br>";

    //Exercício 2
    $idade = 17;
    if($idade < 18){
        echo "\nVocê é menor de idade, tá novinho<br>";
    }else{
        echo "Você é maior de idade, já pode ser preso, fica esperto garotão(ona)<br>";
    }

    //Exercício 3
    $nota = 10000;
    if($nota > 8000){
        echo "Não pode ser! É MAIS DE OITO MILL!!!!!<br>";
    }
    elseif($nota < 70){
        echo "Sua nota foi $nota, logo você reprovou, SEU LIXO! Melhore<br>";
    }elseif($nota < 90){
        echo "Você foi aprovado<br>";
    }elseif($nota >=90 && $nota < 101){
        echo "Você foi aprovado com exelência!<br>";
    }elseif ($nota >= 101 && $nota < 8000){
        echo "O QUE!? A nota só vai até 100, como pode isso?<br>";
    }
?>