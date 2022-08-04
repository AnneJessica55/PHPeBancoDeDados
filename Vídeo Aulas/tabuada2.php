<?php
$page_title = "While";
include("header.php");
echo("<h1>Tabuada usando o While</h1>");
$i = 0;
$j = 0;
while($i<=10){
    while($j <= 10){
        $prod = $i * $j;
        echo("$i x $j = $prod. <br>");
        $j++;
    }
    $i++;
    $j = 0;
    echo("<hr>");
    echo("<br>");
}

include("footer.php");
?>