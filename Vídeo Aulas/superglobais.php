<?php
$page_title = "Superglobais";
include ("header.php");
/*SUPERGLOBAIS
Como falado anteriormente, as variáveis no PHP são locais, ou seja, só funcionarão dentro de funções caso sejam declaradas dentro dela.
Para resolver isso, podemos transformar qualquer variável em global como no exeplo abaixo:
 */
$num1 = 144;
$num2 = 352;

function soma(){ 
$GLOBALS['sum'] = $GLOBALS['num1'] + $GLOBALS['num2'];
$sum = $num1 + $num2;
}
soma();

echo "<p>A soma de 144 e 352 é igual a $sum</p>";
echo "<p>--------------------------------------------------------------</p>";

/*$_server - mostra informações importantes que podem ser combinadas.*/

echo $_SERVER['PHP_SELF'];


include ("footer.php");
?>
