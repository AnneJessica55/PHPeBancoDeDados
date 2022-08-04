<?php 
include("header.php");
$page_title = "Variáveis";
//No PHP não se pode iniciar variáveis com números;
//As variáveis são Case Sensitive:
/*
$cor="Vermelho";
$cor="Preto";
$Cor="Verde";
echo $cor;
*/
//Não pode utilizar como nome de variável uma palavra reservada;
// As variáveis no PHP não são globais. Ou seja, elas só funcionam dentro do PHP e fora de funções;
//Para tornar uma variável global, é preciso declará-la como global;
/*
$x = 10;
$y = 15;
function teste(){
    global $x, $y, $z;
    $z = $x + $y;
    echo "<p>O valor de x dentro da função: $x </p><p>O valor de y dentro da função: $y</p>";
}
teste();
echo "<p>A soma de x e y é igual a $z</p>";
function mult(){
    global $x, $y;
    $w = $x * $y;
    echo "<p>O pruduto de x e y é igual a $w</p>";
}
mult();
*/
include("footer.php");
?>