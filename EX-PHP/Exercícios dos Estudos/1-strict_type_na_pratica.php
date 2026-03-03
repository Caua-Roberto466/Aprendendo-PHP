<?php
declare(strict_types=1);

function calcular(int $num1, int $num2) : int{
    $soma = $num1 + $num2;
    return $soma;
}
$numero1 = 19;
$numero2 = 14;
echo "A soma de $numero1 com $numero2 é " . calcular($numero1, $numero2);