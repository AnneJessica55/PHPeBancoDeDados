<?php
$page_title = "Variáveis variantes";
include ("header.php");

$curso = "faculdade";
/* Quando colocado o segundo $, cria-se uma nova variável com o nome do valor da variável referida */
$$curso = "Engenharia Química";

echo("O valor da variáver curso é $curso, e da variável faculdade é $faculdade");

include ("footer.php");
?>