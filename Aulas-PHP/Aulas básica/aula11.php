<?php 
//Estudando as funções de data em php
/* 
date() - a função date() em PHP serve para formatar datas, de acordo com o formato informados, exemplo: date('d/m/Y') a saída é 10/11/2025
*/
echo date('d/m/Y');
echo "<br><br>";
echo date('y/d/m');
echo "<br><br>";
echo date('d/m/Y H:i:s');

echo "<br><br>";

/* 
time() - a função time() passa um timestamp, que é ilegível para humanos, mas pode ser combinada com a função date, e pode ser usada para calcúlos de datas futuras, timestamp são contados a partir do dia 1 de janeiro de 1970
*/
echo "<br><br>";
echo time();

echo "<br><br>";
//time com date
echo date("d/m/Y", 1763413850);

echo "<br><br>";

//Prevendo o futuro
$atual = time();
$proxima_semana = time()+(8*24*60*60);
echo "A data da semana que vem é " . date("d/m/Y", $proxima_semana);

/* 
strtotime() - a função strtotime() converte uma data string em um timestamp
*/
echo "<br><br>";echo "<br><br>";

$ontem = strtotime("11/14/2025");
echo "Ontem foi ". date("d/m/Y" , $ontem);

echo "<br><br>";
echo "<br><br>";

/* 
date_default_timezone_set() - a função date_default_timezone_set() define o fuso horário que vai ser trabalhado, mas precisa estar na lista do PHP
*/
date_default_timezone_set('America/Sao_Paulo');
echo date("H:i:s");
?>