<?php
$page_title = "Funções Matemáticas";
include("header.php");
/*
FUNÇÕES MATEMATICAS
PI
*/
echo pi();
echo "<br>";

/*MAIOR E MENOR NÚMERO
*/
$nume = [2, 4, 85, 12, -16, 1, 0, 64, 20];
echo min($nume);
echo "<br>";
echo max($nume);
/*
VALOR ABSOLUTO
*/
echo "<br>";
echo abs(-3000);
/*RAIZ QUADRADA*/
echo "<br>";
echo sqrt(121);
echo "<br>";
/*ARREDONDAMENTO*/
echo round(3.1516);
echo "<br>";
/*GERADOR DE NÚMEROS ALEATORIOS*/
echo rand(1, 10);

include("footer.php");
?>
