<?php 
//Exercício 13 - Percorrendo Array assiciativo
$notas = array('Maria' => 5, 'Rafaella' => 9, 'Marcos' => 7, 'Alves' => 10);

foreach($notas as $nome => $nota){
    echo "$nome tirou $nota"."<br>";
}
?>