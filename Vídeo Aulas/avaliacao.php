<?php 
$page_title = "Avaliação";
include ("header.php");

$a = 10;
$b = "10";
if ($a == $b)
    print "caso 1";
else
    print "caso 2";

if ($a === $b) {
    print "caso 3";
} else {
    print "caso 4";
}

include ("footer.php");
?>