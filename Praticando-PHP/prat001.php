<?php 
//Praticando arryas em PHP
$array1 = [13, 5, 43, 5, 23, 91];
foreach($array1 as $valor){
    echo "$valor é um valor de um array<br>";
}

echo "<br><br>";

$array2 = [23, 653, 13, 754, 213, 754];
$soma_array = 0;
foreach($array2 as $valor){
    echo "$valor vai ser somado<br>";
    $soma_array += $valor;
}
echo "$soma_array é a soma de todos os valores do array";

echo "<br><br>";

$array3 = ['Marcos' => 2, 'Vitor'=> 3, 'Julia' => 9, 'Carlos' => 8, 'Maria' => 0, 'Luan' => 10];
foreach($array3 as $nome => $nota){
    echo "$nome tirou $nota <br>";
}

echo "<br><br>";

sort($array1);
foreach($array1 as $valor){
    echo "$valor em ordem cresacente<br>";
}

echo "<br><br>";

rsort($array1);
foreach($array1 as $valor){
    echo "$valor em ordem decrescente<br>";
}

echo "<br><br>";

$array4 = ['Ana', 'Maria', 'Vitor', 'José', 'Carlos'];
sort($array4);
foreach($array4 as $valor){
    echo "$valor em ordem alfabética<br>";
}

echo "<br><br>";

rsort($array4);
foreach($array4 as $valor){
    echo "$valor em ordem alfabética reversa<br>";
}

echo "<br><br>";

asort($array3);
foreach($array3 as $nome => $nota){
    echo "$nome tirou $nota (ordem crescente)<br>";
}

echo "<br><br>";

arsort($array3);
foreach($array3 as $nome => $nota){
    echo "$nome tirou $nota (ordem decrescente)<br>";
}

echo "<br><br>";

ksort($array3);
foreach($array3 as $nome => $nota){
    echo "$nome tirou $nota (ordem alfabética)<br>";
}

echo "<br><br>";

krsort($array3);
foreach($array3 as $nome => $nota){
    echo "$nome tirou $nota (ordem alfabética reversa)<br>";
}
?>