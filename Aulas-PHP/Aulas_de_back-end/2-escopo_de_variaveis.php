<?php

/*$linguagem = 'PHP';

include 'exemplo.php'; (exemplo.php:$linguagem = 'Java';)

echo $linguagem;
*/

/*
$nome = "Cauã";

function apresentar() : void{
    $nome = "Caio";
    echo "$nome";
}

apresentar();
echo "\n";
echo $nome;
*/

$nome = "Carlos";
function apresentar(){
	global $nome;
	echo $nome;
} //Saída $nome
?>