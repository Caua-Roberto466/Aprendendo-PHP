<?php
$nome = "carlos";
$sobrenome = "Jurandi";
$profissao;
if($sobrenome == "Alberto"){
    $profissao = "Programador";
}
$resultado = $profissao ?? "Não é o Carlinhos";
echo $resultado;
?>