<?php
$page_title = "Condicionais";
include("header.php");
/*Condidionais
As condicionais if, else e switch são semelhantes ao do Javascript.
Pelo fato do Switch ter sido pouco explorado, abaixo estará um exemplo com a explicação.*/

//Definindo uma variável chamada cor
$cor = "Vermelha";
//definindo a variável padrão da condicional.
switch($cor) {
    case "Vermelha":
        //primeira condicional "Caso a variável $cor seja Vermelha mostre 'Acor é Vermelha'".
        echo "A cor é Vermelha.";
        //Fim da condicional
    break;
    case "Verde":
        echo "A cor é Verde";
        break;
    case "Preta":
        echo "A cor é preta";
    break;
    default:
        echo "Cor não identificada";
}

include("footer.php");
?>