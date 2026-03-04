<?php
/*
function apresentar(&$p){
    $p += 20;
}
$a = 10;
apresentar($a);
echo $a;

$std = new stdClass;
$std->name = 'Alexandre';

$std1 = $std;
$std1->name = 'João';

var_dump($std, $std1);

$name = 'Alessandro';
$name1 = &$name;
$name1 = 'João';


var_dump($name, $name1);
*/

$name1 = "João";

function teste(&$name){
    $name = "Alessandro";
    return $name;
}


var_dump(teste($name1), $name1);

?>