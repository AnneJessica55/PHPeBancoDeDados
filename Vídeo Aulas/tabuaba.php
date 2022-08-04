<?php
$page_title = "For";
include("header.php");
echo("<h1>Tabuada usando o For</h1>");
for($i = 0; $i <= 10; $i++){
    echo("<hr>");
    for($j = 0; $j<= 10; $j++){
        $prod = $i * $j;
        echo("$i x $j = $prod <br>");
    }
}

include("footer.php");
?>