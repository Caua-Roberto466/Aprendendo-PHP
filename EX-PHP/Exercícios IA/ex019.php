<?php 
//Exercício 19 - Ordenando array em php
$numeros = [1, 2, 7, 4, 25, 5, 578, 0];
//Ordem crescente
sort($numeros);
foreach($numeros as $numero){
    echo "Número $numero <br>";
}
echo"<br>";
//Ordem decrescente
rsort($numeros);
foreach($numeros as $numero){
    echo "Número $numero ao contrário <br>";
}
echo"<br>";
//Ordenando arrays associativos
$turma = ['Marcos' => 4, 'Victor' => 3, 'Ana' => 4, 'Carlos' => 10, 'Yuri' => 0];
//Por valor
asort($turma);
foreach($turma as $aluno => $nota){
    echo "Aluno(a) $aluno tirou $nota <br>";
}
echo"<br>";//Por chave
ksort($turma);
foreach($turma as $aluno => $nota){
    echo "Aluno(a) $aluno tirou $nota <br>";
}
?>