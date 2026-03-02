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

    $pessas = array("nome" => "Marcos", "idade" => 25, "cidade" => "São Paulo");
    foreach($pessas as $chave => $valor){
        echo "$chave: $valor<br>";
    }

    //Exercício 1
    $dados = array(5, 2, 9, 1);
    echo $dados[1];

    echo "<br>";
    sort($dados);
    print_r($dados);

    echo "<br><br>";
    
    //Exercício 2
    $carro = array("marca" => "BMW", "modelo" => "S110", "ano" => 2025, );
    echo $carro["modelo"]."<br>";

    $carro["cor"] = "preto";
    echo $carro["cor"];

    echo "<br><br>";

    //Exercício 3
    $alunos = ["Maria", "Pedro", "João", "Miguel"];

    array_push($alunos, "Ana");
    echo count($alunos);

    echo "<br><br>";

    //Exercício 4
    $produto = array(
        ["produto" => "Celular", "quantidade" => 3, "preco" => 100],
        ["produto" => "carro", "quantidade" => 2, "preco" => 500],
    );
    $total = 0;
    foreach($produto as $item){
        $subtotal = $item["preco"] * $item["quantidade"];
        echo $item["produto"] . "R$$subtotal<br>";
        $total += $subtotal;
    }
    echo "Valor total: $total<br><br>";

    //Exercíco 5
    $notasD = array("Maria" => 5, "Jorge" => 4, "Vitor" => 9);

    arsort($notasD);
    foreach($notasD as $nome => $num){
        echo "$nome tirou $num<br>";
    }
?>