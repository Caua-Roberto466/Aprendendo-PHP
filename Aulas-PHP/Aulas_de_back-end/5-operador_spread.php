<?php
$arreyA = [1, 2, 3, 4];
$arreyB = [9, 10, 11, 12];
$operado = [...$arreyA, 5, 6, 7, 8, ...$arreyB];
foreach($operado as $valor){
    echo "$valor ";
}

echo "<br>";

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$array3 = [$array1, ...$array2];
print_r($array3);

echo "<br>";
