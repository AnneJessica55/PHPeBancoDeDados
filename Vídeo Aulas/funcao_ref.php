<?php
$page_title = "Função por Referência";
require("header.php");
echo('
<form method="post">
    <label for="a">Digite o valor da caixa:</label>
    <input type="number" name="a" id="a">
    <label for="b">Digite o valor da caixa:</label>
    <input type="number" name="b" id="b">
    <input type="submit" value="Enviar">
</form>'
);

function incremento(&$x, $y){
    $x += $y;
    echo($x);
}
$a = isset($_POST['a'])? $_POST['a']:0;
$b = isset($_POST['b'])? $_POST['b']:0;

echo($a.'<br>');
echo(incremento($a, $b).'<br>'.$a);
require("footer.php");

?>

