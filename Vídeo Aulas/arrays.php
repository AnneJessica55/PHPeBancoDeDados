<?php
$page_title = "Matrizes e Vetores";
include ("header.php");
/*Matrizes e Vetores
Nesse estudo, foi falado um pouco sobre matrizes e vetores no código de tipos_de_dados.php.
Esse código tem o objetvo de aprofundar um pouco mais o conhecimento sobre esse elemento.
Os Arrays além de carregar vários valores, podem carregar valores associados. Veja o emeplo abaixo: */
//Criando um Array que leu a idade de alguns integrantes de um grupo de pessoas qualquer.
$idade = array("Jurema"=>"30 anos", "Horácio"=>"15 anos", "Genoveva"=>"22 anos", "Bauares"=>"27 anos", "Roberta"=>"65 anos");
//Repare que antes das "," temos 2 valores separados por =>.
//O valor a esquerda do => representa o item ou chave do array.
//Já o valor a direita representa uma atribuição dessa item .
echo "Jurema tem " . $idade["Jurema"] . "<br>";
//Veja que pra saber a idade de Jurema, eu não coloquei a posição 1, e sim a chave "Jurema".
//Dá para alterar os valores dessas chaves da seguinte maneira.
echo "<p>----------------------------------------------------------</p>";

$idade["Horácio"] = "25 anos";
echo "Horácio tem " . $idade["Horácio"] . "<br>";
echo "<p>----------------------------------------------------------</p>";
//para mostrar os valores da array, você pode utilizar o foreach. ESPIAAA!
foreach($idade as $name=>$age){
echo "<p>$name tem exatamente $age.</p>";
}
echo "<p>----------------------------------------------------------</p>";
//O PHP possui uma função específica que coloca as chaves de um array em ordem alfabética. Essa função se chama sort. Veja o exemplo abaixo:
$dostoievski = array("O Jogador", "Crime e Castigo", "Os Irmãos Karamazov","O Iditota",
"Memórias do Subssolo", "Os Demônios");
sort($dostoievski);
echo "<h4>Confira abaixo as Principais Obras de Fiodor Dostoieski em ordem alfabética</h4>";
foreach($dostoievski as $dostoievski){
    echo"#" . $dostoievski.";<br>";
    }
    echo "<p>----------------------------------------------------------</p>";
    //Para inverte a ordem é só usar o rsort:
$dostoievski = array("O Jogador", "Crime e Castigo", "Os Irmãos Karamazov","O Iditota",
"Memórias do Subssolo", "Os Demônios");
rsort($dostoievski);
echo "<h4>Confira abaixo as Principais Obras de Fiodor Dostoieski em ordem alfabética reversa</h4>";
foreach($dostoievski as $dostoievski){
    echo"#" . $dostoievski.";<br>";
    }
    echo "<p>----------------------------------------------------------</p>";
//Para organizar por ordem alfabética/ numérica as atribuições das arrays associativas, usamos o asort:
$compras = array("Pepino"=>"US$1.50", "Lápis"=>"US$0.25", "Playstation 5"=>"US$450", "Notebook ASUS"=>"US$150");

asort($compras);

echo "<h4>Lista de Compras</h4>";
foreach($compras as $item=>$preco){
  
echo "<p>#$item custou $preco</p>"; 
}
echo "<p>----------------------------------------------------------</p>";
//Para organizar em ordem alfabética ou numérica pelas chaves, você deve utilizar o ksort:
$compras = array("Pepino"=>"US$1.50", "Lápis"=>"US$0.25", "Playstation 5"=>"US$450", "Notebook ASUS"=>"US$150");

ksort($compras);

echo "<h4>Lista de Compras</h4>";
foreach($compras as $item=>$preco){
  
echo "<p>#$item custou $preco</p>"; 
}
echo "<p>----------------------------------------------------------</p>";
/*O comando range inicía de um número até outro pulando a quantidade inserida. */

$jurema = range(10, 100, 5);
echo("<pre>");
print_r($jurema);
echo("</pre>");
echo "<p>----------------------------------------------------------</p>";
/*É possível adicionar um ítem no início de uma array utilizando a função array_unshift */
array_unshift($jurema, 55);
echo("<pre>");
print_r($jurema);
echo("</pre>");
echo "<p>----------------------------------------------------------</p>";
/*É possivel excluir o primeiro item de uma array utilizando o array_shift */
array_shift($jurema);
echo("<pre>");
print_r($jurema);
echo("</pre>");
echo "<p>----------------------------------------------------------</p>";
/*Para adicionar elementos no final da array, pode-se utilizar o método convecional ou a função array_push de forma semelhante a array_unshift, para excluir o ultimo ítem da array é só utilizar a função array_pop, semelhante a função array_shift */


include ("footer.php");

?>


