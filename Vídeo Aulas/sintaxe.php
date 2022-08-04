<?php 
include("header.php");
$page_title = "Sintaxe";
//O PHP, para as palavras reservadas não é case sensitive;
//O comando echo serve para retornar um valor;
//echo "<p>Olá, tudo bem</p>";
// para concatenat utiliza-se o ".";
//Os comandos terminam sempre com ";";
//para atribuir uma variável, utilizamos o $var;
//$var = "Olá mundo";
// As variáveis são locais, só funcionam no PHP;
//É possível criar um script dentro de uma variável PHP
//$js = "<script>alert('Atenção! Olá mundo.')</script>";
//echo $js;
//Também é possível mesclar HTML5 com PHP;
/**/
?>
<?php 
$ativacao = "NÃO";
if($ativacao=="SIM") { 
    ?>
    <h1>Parabéns, você está Online</h1>
<?php 
} else { 
    ?>
    <h1>Lamento, mas você não está logado</h1>
<?php
}

include("footer.php");
?>