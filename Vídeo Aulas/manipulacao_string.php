<?php
$page_title = "Manipulação de Strings";
include("header.php");

 /*
 MANIPULAÇÃO DE STRINGS:
 STRLEN: conta a quantidade de caracteres de uma string;
 
$h = "Olá, Pessoal";
echo strlen($h);
*/
/*
STR_WORD_COUNT:Conta o número de palavras;

$y = "Bem-vindo ao Rio de Janeiro!";
echo str_word_count($y);
*/
/*
STRREV: Tra a forma reversiva da palavra;

$p = "SABOTAGEM";
echo strrev($p);
*/
/*
SRTPOS(): Retorna a posição de uma palavra.

echo strpos("Vida nova, tempo novo", "tempo");
*/
/*
STR_REPLACE():Substitui uma palavra ou caractere.

$frase = "<p>Olá, Gerusa, esperro que esteja bem.</p>";
echo $frase;
echo str_replace("esperro", "espero", $frase);
*/
/*O printf formata as variáveis ao mesmo tempo que exibe.
você pode utilizar:
%d para representar número decimal;
%u para representar um número decimal sem sinal;
%f para um número real;
%s para uma string
Segue o exemplo abaixo

$prod = "livro";
$prec = "45.156";
printf("O %s está custando R$%.2f", $prod, $prec);
*/
/*print_r: Mostra detalhes de vetores 
$y = array("fusca", "marea", "palio", "fox");
var_export($y);*/

/*O worwrap() é uma função nativa do PHP que serve para quebra de linha no código ou visua.
Para que haja uma quebra de linha no código, basta adicionar q quantidade máxima de caractere por linha, caso queira que seja uma quebra somente visual, insira uma tag <br> após a virgula, caso queir aque seja uma quebra tanto visual como em código, basta acrescentar um \n após o <br><div class="É possível adicionar os valores true ou false para que a quebra de linha seja no final da palavra independente dela ter mais caracteres do que o selecionado para false, e quebrar palavras a quando o atingir o limite de caracteres para true"></div>
Veja o exemplo abaixo: 
$text ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit adipisci laborum totam pariatur distinctio quo necessitatibus eius tenetur omnis, ipsa maxime quas. Commodi nihil eligendi ullam. Dignissimos quisquam blanditiis quaerat!";
$r = wordwrap($text, 25,"<br>\n");
echo $r;*/
/*Para mostrar o código do caractere utiliza-se o ord */
$charac = "º";
$cod = ord($charac);
echo($cod);

include("footer.php");


?>
