<?php 
    $frutas = ["banana", "maçã", "uva"];
    echo $frutas[0];

    $pessoa = [
        "nome" => "Carlos",
        "Idade" => 35,
        "país" => "Brasil"
    ];
    echo "<br>Nome: ". $pessoa["nome"]."<br>";
    echo "Idade: ". $pessoa["Idade"]."<br>";
    echo "País: " . $pessoa["país"]. "<br>";

    $turma = [
        ["nome" => "Ana", "idade" => 10],
        ["nome" => "Mario", "idade" => 11]
    ];
    echo $turma[0]["nome"] . " tem " . $turma[0]["idade"]. "Anos<br>";
    echo $turma[1]["nome"] . " tem " . $turma[1]["idade"] . "Anos <br>";

    $pessas = ["nome" => "Marcos", "idade" => 25, "cidade" => "São Paulo"];
    foreach($pessas as $chave => $valor){
        echo "$chave: $valor<br>";
    }

    //Exercício 1
    
?>