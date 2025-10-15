<?php 
//Exercício 21 de PHP - Manipulando números em PHP
$num1 = 3.78;
$num2 = 8.567;
$num3 = 1.8243;
$num4 = 8.365;

echo "$num1 arredondado com round: ".round($num1, 0)."<br>";
echo "$num2 arredondado com ceil: ".ceil($num2)."<br>";
echo "$num3 arredondado com floor: ".floor($num3)."<br>";
echo "O menor número entre $num1, $num2, $num3 e $num4: ".min($num1, $num2, $num3, $num4)."<br>";
echo "O maior número entre $num1, $num2, $num3 e $num4: ".max($num1, $num2, $num3, $num4)."<br>";
?>