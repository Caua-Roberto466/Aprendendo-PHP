<?php 
//Aprendendo rand(), mt_rand(), sqrt(), pow() e abs()

/*
rand(): Gera um número aletatório de acordo com os paramêtros que você passar, se você não passar paramêtro, ele vai gerar um número entre 0 e getrandmax(), exemplo: rand(1, 10) ou rand()
*/
echo rand(1, 10);
echo "<br>";
echo rand();

/*
mt_rand(): é parecido com o rand, mas não é muito seguro
*/
echo "<br><br>";
echo mt_rand(1, 10);
echo "<br>";
echo mt_rand();

/* 
sqrt(): Ele vai mostrar a raiz quadrada do número que você informar, exemplo: sqrt(5)
*/
echo "<br><br>". sqrt(25); //Vai retornar 5
echo "<br>" . sqrt(78); //Vai retornar 8.83...

echo "<br><br>";

/*
pow(): ele vai fazer a exponenciação de um número, passando a base e o expoente, exemplo: pow(2, 3), em versões mais recentes do PHP ** faz a mesma função
*/
echo pow(2, 2); //Vai retornar 4
echo "<br>"; //Vai retornar 4
echo 2**2;

/*
abs(): abs retorna o valor absoluto de um número, se ele for positivo, fica igual, se for negativo, ele fica positivo, exemplo: abs(-47)
*/
echo "<br><br>";
echo abs(-47); //Vai retornar 47
echo "<br>";
echo abs(5); //O 5 vai permanecer igual

//Praticando
$num1 = rand(1, 10);
$num2 = mt_rand(1, 100);
$num3 = sqrt(100);
$num4 = pow(4, 18);
$num5 = abs(-1023);

echo "<br><br>";

echo "O número aleatório é $num1 <br> O segundo número aleatório é $num2 <br> Raiz quadrada de 100 é $num3 <br> 4 elevado a 18 é $num4 <br> o valor absoluto de -1023 é $num5";

echo "<br><br>";
if($num4 % 4 == 0){
    echo "$num4 é divisível por 4, o resultado é " . $num4 / 4;
}else{
    echo "$num4 não é divisível por 4, o resultado é " . $num4 / 4;
}
?>