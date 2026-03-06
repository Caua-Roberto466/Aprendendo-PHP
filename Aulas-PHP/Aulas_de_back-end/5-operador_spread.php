<?php
$arreyA = [1, 2, 3, 4];
$arreyB = [9, 10, 11, 12];
$operado = [...$arreyA, 5, 6, 7, 8, ...$arreyB];
foreach($operado as $valor){
    echo "$valor ";
}