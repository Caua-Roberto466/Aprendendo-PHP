<?php
$x = 1;

$funcao = fn($y) => $y + $x;

echo $funcao(5); //Saída: 6

echo "\n";
$z = 2;

$funcao2 = fn($x) => fn($y) => $x + $y + $z;
echo $funcao2(2)(2); //saída: 6
?>