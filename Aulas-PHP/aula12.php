<?php 
//Contando frase
$frase = "Não estou aprendendo na ordem certa";
$quantia_de_palavra = str_word_count($frase);
echo "A frase: <b>$frase</b>, tem $quantia_de_palavra palavras";

echo "<br><br>";

//Invertendo palavra
$palavra = "Python";
$reverso = strrev($palavra);
echo "A palavra: $palavra ao contrátio é $reverso";
?>