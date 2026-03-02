<?php 
//Estudando String e suas funções nativas: strlen(), strtoupper(), strtolower(), ucfirst(), ucwords(), str_replace().
$texto = "eu como Batata com arroz e purê";
//strlen() conta o número de bytes dentro de uma variável, mas dependendo do caractere, pode contar o número errado, já que caractéres especiais tem um valor maior que 1 byte.
echo strlen($texto);
echo "<br>";

//mb_strlen() conta o comprimento de uma string, independente do caractere
echo mb_strlen($texto);
echo "<br>";

//strtoupper() deixa a string em maiúscula com base em caracteres ASCII, mas não altera os não-ASCII, como os acentuados
echo strtoupper($texto);
echo "<br>";

//mb_strtoupper() mostra os valores maiúsculo, incluindo os acentuados
echo mb_strtoupper($texto);
echo "<br>";

//strtolower() converte as letras para mínuscúla, mas só da tabela ASCII, e não conscidera os não-ASCII, como os acentuados
$texto2 = "MÁXIMO DE LETRAS É 2";
echo strtolower($texto2);
echo "<br>";

//mb_strtolower() deixa as letrás minúsculas, tanto ASCII quanto não-ASCII
echo mb_strtolower($texto2);
echo "<br>";

//ucfirst() transforma o primeiro caractere de uma string em maiúscula, maas não conta não-ASCII como acentos, se tiver em maiúscula, não vai mudar em nada, e se não for número como 123 oi, não vai contecer nada com o oi
echo ucfirst($texto);
echo "<br>";

//ucwords() converte a primeira letra de cada palavra em uma string, mas não tem suporte para acentos
$texto3 = 'água é muio bom';
echo ucwords($texto3);
echo "<br>";

//mb_convert_case() converte casas da string de acordo com o modo que você usa, você precisa passar a variável, o modo, como MB_CASE_TITLE para a primeira letra, e a forma de codificação como UTF-8
echo mb_convert_case($texto3, MB_CASE_TITLE, 'UTF-8');
echo "<br>";

//str_replace() substitui uma string ou array por outra, tudo que você precisa passar é a que vai ser substituída, a que vai ser substituir, e a original
$texto4 = 'Olá mundo novo';
echo str_replace('Olá', 'Oi', $texto4);
?>