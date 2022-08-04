<?php
$page_title = "Funções";
include("header.php");
/*FUNÇÕES
São blocos de comandos personalizados.
As funções no PHP funcionam de forma semelhante as funções no Javascript, e não são case sensitive.
Veja o exemplo abaixo
*/
function escrever(){
    echo "<h3>Essa função só serve para escrever essa mensagem</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde tempore, perspiciatis praesentium error, odio ut iusto at quibusdam blanditiis quos officiis eveniet delectus necessitatibus voluptates repudiandae doloribus asperiores. Impedit?</p>";
}
//Pode invocá-la ou chamá-la com qualquer configuração de letra.
ESCREVER();

//As funções podem abrigar alguma varíavel para serem ativadas quando chamadas, veja o exemplo abaixo.
echo"--------------------------------------------------------------------";
function identificacao($nome){
    echo "<p>Olá, $nome, estamos felizes por você fazer parte da nossa equipe.</p>";
}

IdEnTiFiCaCaO("Jurema");

echo"<p>--------------------------------------------------------------------</p>";
//As funções podem também retornar valores. Veja o Exemplo abaixo.
function prod($val1, $val2){
    return $val1 * $val2 ."<br>";
}
echo "<p>O produto de 4 e 5 é igual a</p>". prod( 4, 5);

include("footer.php");
?>


