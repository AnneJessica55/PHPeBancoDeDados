<?php
$page_title = "Echo e Print";
include ("header.php");
/*ECHO
* Utilizando o comando echo, é possível interpolar texto e variável utilizando aspas duplas;
* Quando utilizados as aspas simples, o echo entende a variável como texto
* Para concatenar, utiliza-se ".';
* Só é vantagem utilizar as aspas simples, quado for necessária a utilização das aspas duplas no texto;

PRINT
* O print é um comando semelhante ao acho, porém mais lento;
 */
// O & relaciona as suas variáveis.
$a = 5;
$b = &$a;
$b += 6;
$ano1 = 2022;


echo("O valor de A é $a e o valor de B é $b.");
echo("Estamos no ano de $ano1, e ano que vem será o ano de ".++$ano1);
include ("footer.php");
?>