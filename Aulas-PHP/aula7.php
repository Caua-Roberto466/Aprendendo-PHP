<?php 
//Estudando manipulaçoes de arrays com sort e seus derivados
$idades = [12, 14, 67, 24 ,75, 2];
sort($idades); //Para usar o sort(), não se aplica em uma váriavél, senão o valor vem de maneira incorreta
/* 
A função sort() ordena em ordem crescente o array, tanto númericos, quanto por ordem alfabética
*/
foreach($idades as $idade){
    echo $idade . "<br>";
}
echo "<br>";
rsort($idades);

$nomes = ['Marcos', 'Ana', 'João', 'Arhur', 'Franscisco', 'Yasmin'];
sort($nomes);
foreach($nomes as $nome){
    echo "Olá $nome! <br>";
}
/* 
A função rsort() ordena o array em ordem decrescente, tanto números quanto letras
*/
echo "<br>";
foreach($idades as $idade){
    echo "Vovê tem $idade anos <br>";
}
echo "<br>";
rsort($nomes);
foreach($nomes as $nome){
    echo "Olá $nome <br>";
}
/* 
A função asort() ordena arrays associativos pela ordem do valor de forma crescente
*/
echo "<br>";
$turma = array('Maria' => 5, 'Carlos' => 10, 'Marcos' => 7, 'João' => 3);
asort($turma);
print_r($turma); //A função print_r() serve para mostrar um array de forma literal, sme mudar como ele é, ao contrário do foreach
echo"<br>";
foreach($turma as $aluno => $nota){
    echo "O(a) aluno $aluno tirou $nota <br>";
}

//A função arsort() ordena um array associativo de forma decrescente pelo valor
arsort($turma);
echo "<br>";
foreach($turma as $aluno => $nota){
    echo "$aluno tirou $nota<br>";
}
echo"<br>";

//A função ksort() ordena em ordem crescente um array associativo pela chave
ksort($turma);
foreach($turma as $aluno => $nota){
    echo "$aluno tirou $nota<br>";
}

//A função krsort() ordena um array associativo em ordem decrescente pela chave
echo"<br>";
krsort($turma);
foreach($turma as $aluno => $nota){
    echo "$aluno tirou $nota<br>";
}
?>