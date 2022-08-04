<?php
$page_title = "constantes";
include("header.php");
/*CRIAÇÃO DE CONSTANTES
As constantes são globais*/
define("exemplo", [1, 2, 3, 5, 7, 11, 13, 17]);
echo exemplo[3];

include("footer.php");
?>