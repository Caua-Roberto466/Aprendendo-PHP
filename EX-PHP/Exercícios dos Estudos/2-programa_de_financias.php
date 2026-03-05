<?php
declare(strict_types=1);
function salario(float $vendas){
    $salario = $vendas * 0.60;
    return $salario;
}

$vendas = 15000;
$valorFuncionairo = &$vendas;
$salario = salario($vendas);

echo "Seu salário esse mês foi $salario";