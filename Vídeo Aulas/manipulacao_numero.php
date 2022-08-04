<?php
include("header.php");
$page_title = "Manipulação de Números";
/*
MANIPULAÇÃO DE NÚMEROS

CONVERSÕES:
O PHP é uma linguemgem bastante inteligente, com isso elepode entender que mesmo um número estando entre aspas, ele se configura em um inteiro ou um float.
Também é possível que ao somar dois número decimais, e o resultado da soma ser um npumero inteiro, o PHP o leia como número decimal. Como no exemplo abaixo:

$calc1 = 2.5 + 2.5;
echo "$calc1 <br>";
echo var_dump($calc1);

Para converter um número float em integer, utiliza-se o seguinte comando:

$calc1 = 2.5 + 2.5;
$conv1 = (int) $calc1;
echo "<p>$conv1</p>";
echo var_dump($conv1);
*/
/*
TESTE DE VARIÁVEL.
No PHP é possível testar se um número é inteiro ou decimal

$num1 = 200;
$num2 = 2.26;
$prod = $num1 * $num2;
var_dump(is_int($prod));
*/
/*
Também é possível testar se um valor é numérico
*/
$num = "15";
var_dump(is_numeric($num));
//Apesar de 15 estar entre aspas, o PHP o considera um número automaticamente.
include("footer.php");

?>
