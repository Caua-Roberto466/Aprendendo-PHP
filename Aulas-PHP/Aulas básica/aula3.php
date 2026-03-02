<?php 
    //Exercício 1
    $num = 1;

    while($num <= 10){
        echo "Número $num<br>";
        $num++;
    }
    echo "<br><br>";

    //Exercício 2
    for($i = 1; $i <= 10; $i++){
        $tabuada = 7 * $i;
        echo "7 x $i = $tabuada<br>";
    }

    echo "<br><br>";

    //Exercício 3
    $nomes = ["Maria", "João", "Vitor", "Pedro", "Carlos"];

    foreach($nomes as $nome){
        echo "Olá $nome<br>";
    }

    echo "<br><br>";

    //Exercício 4
    for($i = 1; $i <= 20; $i++){
        if($i % 2 == 0){
            echo "O número $i é par <br>";
        }else{
            echo "O número $i é impar <br>";
        }
    }

    echo "<br><br>";

    //Exercício 5
    for($i = 1; $i <= 50; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
            echo "$i FizzBuzz<br>";
        }elseif ($i % 3 == 0){
            echo "$i Fizz<br>";
        }elseif($i % 5 == 0){
            echo "$i Buzz<br>";
        }else{
            echo "$i<br>";
        }
    }
?>