<?php
$page_title = "DoWhile";
include("header.php");
echo("<h1>Tabuada usando o DoWhile</h1>");
$i = 0;
$j = 0;
do{
    do{
        $prod = $i * $j;
        echo("$i x $j = $prod.<br>");
        $j++;
    }while($j<=10);
    echo("<hr>");
    echo("<br>");
    $j = 0;
    $i++;
}while($i<=10);

include("footer.php");
?>