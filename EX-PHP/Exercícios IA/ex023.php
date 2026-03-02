<?php 
//Mechendo com datas
date_default_timezone_set('America/Sao_Paulo');

echo "Hoje é " . date("d/m/Y H:i:s");

echo "<br><br>";

echo "Hoje é ". date("l");

echo "<br><br>";

$data = strtotime("2025-12-25");
$atual = time();

if($data > $atual){
    $falta = round(($data-$atual) / 86400);
    echo "Faltam $falta dias para essa data";
}elseif($data < $atual){
    $falta = round(($atual-$data) / 86400);
    echo "Essa data passou a $falta dias";
}else{
    echo "Essa data é hoje";
}
//86400
?>