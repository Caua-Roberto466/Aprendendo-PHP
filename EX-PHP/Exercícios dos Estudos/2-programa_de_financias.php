<?php
declare(strict_types=1);
function salario(float $vendas, float $totalvendas, float $gastos){
    $porcentagemVendas = ($vendas / $totalvendas) * 100;
    $salario = $vendas - $porcentagemVendas - $gastos;
    echo $salario;
}
salario(100000, 200000, 3000);
