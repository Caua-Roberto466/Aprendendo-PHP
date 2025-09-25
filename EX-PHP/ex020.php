<?php 
$frase = 'Estou aprendendo a programar em PHP';
$quantidade = strlen($frase);
$maiuscula = strtoupper($frase);
$minuscula = strtolower($frase);
$titulo = ucfirst($minuscula);
$todas_palavras = ucwords($frase);
$troca = str_replace('programar', 'codar', $frase);

echo "<h2>Frase original: $frase</h2>";
echo "Quantidade de bytes na frase: $quantidade<br>";
echo "Frase em maiúscula: $maiuscula<br>";
echo "Frase em minúscula: $minuscula<br>";
echo "Frase capitalizada: $titulo<br>";
echo "Todas as  palavras capializadas: $todas_palavras<br>";
echo "Frase com palavra trocada: $troca<br>"
?>