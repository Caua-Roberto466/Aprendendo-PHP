<?php 
//Estudando manipulações de números em php com round(), ceil(), floor(), min() e max() e seus astributos 

//Round e seus atributos()
/*
round() é uma função do PHP que arredondaq o número float com a precisão definoda pelo programador, ele tem alguns modos, para definir como vai ser  o arredondamento. 
*/
echo "Round <br><br>";
echo round(3.457)."<br>";
echo round(3.5)."<br>";

echo round(4.57843, 3)."<br>";
//PHP_ROUND_HALF_UP arredonda o número pralonge do zero, quando ele tá na metade, ou seja, pra cima, 1.5 vira 2, e se o número é negativo, ele vai para baixo, como -1.5 vira -2
echo "PHP_ROUND_HALF_UP <br>";
echo "3.55456 vira ".round(3.55456, 0, PHP_ROUND_HALF_UP)."<br>";

//PHP_ROUND_HALF_DOWN arredonda o número pra perto do zero, qundo ele tá na metade, ou seja, pra baixo, 1.5 vira 1, se o número está negativo, ele arredonda pra cima, como -1.5 vira -1
echo "PHP_ROUND_HALF_DOWN <br>";
echo "2.5 vira ".round(2.5, 0, PHP_ROUND_HALF_DOWN)."<br>";

//PHP_ROUND_HALF_EVEN arredonda o número quando tá na metade para o número par mais próximo, 1.5 vira 2 e 2.5 vira 2, independente da direção
echo "PHP_ROUND_HALF_EVEN <br>";
echo "1.5 vira ".round(1.5, 0, PHP_ROUND_HALF_EVEN)."<br>";
echo "2.5 vira ".round(2.5, 0, PHP_ROUND_HALF_EVEN)."<br>";

//PHP_ROUND_HALF_ODD arredonda o número quando tá na metade para o número impar mais próximo, 1.5 vira 1 e 2.5 vira 3, independente da direção
echo "PHP_ROUND_HALF_ODD <br>";
echo "1.5 vira ".round(1.5, 0, PHP_ROUND_HALF_ODD)."<br>";
echo "2.5 vira ".round(2.5, 0, PHP_ROUND_HALF_ODD)."<br>";

/*
ceil() é uma função que arredonda o número para o próximo maior ou igual inteiro, exemplo: 4.78 vira 5, -3.54 vira -3
*/
echo "<br><br>Ceil<br><br>";

echo "7.45 vira ".ceil(7.45)."<br>";
echo "-3.56 vira ".ceil(-3.56)."<br>";

/*
floor() é uma função que arredonda o número para baixo, até o próximo valor inteiro, exemplo: 4.7 vira 4
*/
echo "<br><br>Floor<br><br>";
echo "3.78 vira ".floor(3.78)."<br>";
echo "-3.78 vira ".floor(-3.78)."<br>";

/*
min() é uma função que retorna um menor valor de um grupo de números específicados ou o menor valor de um array
*/
echo "<br><br>Min<br><br>";
$a = 3;
$b = 5;
$c = 9;
echo "Entre $a, $b, $c o menor é ".min($a, $b, $c)."<br>";

$meu_array = [1, 6, 7, 4, 3, 7, 12, -1];
echo "O menor valor do array é ".min($meu_array);

/*
max() é uma função que retorna um maior valor de um grupo de números específicados ou o maior valor de um array
*/
echo "<br><br>Max<br><br>";
echo "O maior número entre 4, 6, 20 e 44 é ".max(4, 6, 20, 44)."<br>";
$array = [5, 356, 8, 19, 6, 19, 5];
echo "O maior valor do array é ".max($array)."<br>";
?>