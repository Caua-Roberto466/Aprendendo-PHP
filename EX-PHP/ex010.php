<?php 
$numero = 11;
$primo = true;

if($numero <= 1){
    $primo = false;
}else{
    for($i = 2; $i < $numero; $i ++){
        if($numero % $i == 0){
            $primo = false;
            break;
        }
    }
}

if($primo){
    echo "$numero é primo<br>";
}else{
    echo "$numero não é primo";
}

?>