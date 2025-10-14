<?php 
//Estudando manipulações de números em php com round(), ceil(), floor(), min() e max() e seus astributos 

//Round e seus atributos()
/*
round() é uma função do PHP que arredondaq o número float com a precisão definoda pelo programador, ele tem alguns modos, para definir como vai ser  o arredondamento. 
*/
echo "Round <br>";
echo round(3.457)."<br>";
echo round(3.5)."<br>";

echo round(4.57843, 3)."<br>";
//PHP_ROUND_HALF_UP arredonda o número pralonge do zero, quando ele tá na metade, ou seja, pra cima, 1.5 vira 2, e se o número é negativo, ele vai para baixo, como -1.5 vira -2
echo "PHP_ROUND_HALF_UP <br>";
echo round(3.55456, 0, PHP_ROUND_HALF_UP)."<br>";

//PHP_ROUND_HALF_DOWN arredonda o número pra perto do zero, qundo ele tá na metade, ou seja, pra baixo, 1.5 vira 1, se o número está negativo, ele arredonda pra cima, como -1.5 vira -1
echo "PHP_ROUND_HALF_DOWN <br>";
echo round(2.5, 0, PHP_ROUND_HALF_DOWN)."<br>";

//PHP_ROUND_HALF_EVEN arredonda o número quando tá na metade para o número par mais próximo, 1.5 vira 2 e 2.5 vira 2, independente da direção
echo "PHP_ROUND_HALF_EVEN <br>";
echo round(1.5, 0, PHP_ROUND_HALF_EVEN)."<br>";
echo round(2.5, 0, PHP_ROUND_HALF_EVEN)."<br>";

//PHP_ROUND_HALF_ODD arredonda o número quando tá na metade para o número impar mais próximo, 1.5 vira 1 e 2.5 vira 3, independente da direção
echo "PHP_ROUND_HALF_ODD <br>";
echo round(1.5, 0, PHP_ROUND_HALF_ODD)."<br>";
echo round(2.5, 0, PHP_ROUND_HALF_ODD)."<br>";

/*
ceil()
*/
echo "<br><br>Ceil";

?>