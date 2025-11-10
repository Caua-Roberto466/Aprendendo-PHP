<?php 
$frase = "Eu gosto de paçoca!";

$frase_quantia = mb_strlen($frase);
$frase_maiuscula = mb_strtoupper($frase);
echo "A frase é $frase<br>";
echo "A quantia de caracteres da frase é $frase_quantia, e ela maiúsculas é $frase_maiuscula";
?>