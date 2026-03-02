<?php 
//Loop com for
$cidades = ['São Paulo', 'Santos', 'Penha', 'Palmas'];
for($i = 0; $i < count($cidades); $i++){
    echo $cidades[$i] . "<br>";
}
echo "<br>";
//Loop com foreach
$alunos = ['Nolan', 'Pedro', 'Mario', 'Carlos'];
foreach($alunos as $nome){
    echo $nome . "<br>";
}
?>