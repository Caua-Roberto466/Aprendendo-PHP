<?php 
//Exercício 14 - Dentro da variável notas, contar quantos alunos estão dentro dela e a média dos alunos
$notas = array('Ana' => 9, 'Arthur' => 7, 'Bianca' => 6, 'Maria' => 6);
$soma = array_sum($notas); //array_sum serve para somat todos os valores de um array
$total = count($notas); //conta o total de itens dentro de um array
$media = $soma / $total;

echo "O total de alunos é $total e a média é $media";
?>