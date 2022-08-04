<?php
$page_title = "Resultado do Método Post";
include ("header.php");
 if(isset($_POST['livro']) && isset($_POST['autor'])){
        $livro = $_POST['livro'];
        $autor = $_POST['autor'];

        echo "<h1>PROMOÇÃO IMPERDÍVEL.</h1>
        <p>O  livro $livro escrito por $autor está com 45% de desconto!</p>";
    }
    echo "<hr>";
include ("footer.php");
   
 ?>