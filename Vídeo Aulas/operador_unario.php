<?php
$page_title = "Operador Unário";
include ("header.php");

$a = 150;
$b = 200;
/*Assemelha-se a uma condicional if. 
Lê-se: Se verdadeiro ? evento verdadeiro: evento falso;  */
$maior = $a>$b?$a:$b;
$menor = $a<$b?$a:$b;

echo("O menor número entre $a e $b é $menor, e o maior número é o $maior.");

include ("footer.php");
?>