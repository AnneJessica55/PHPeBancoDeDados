<?php

//Título desta página
$page_title = 'Biscoito'; 

/*Aqui eu incluo o conteúdo do arquivo _header.php*/
include ('_header.php');
//require($_)
// O include é similar ao innetHTML="" que a gente aprendeu, ele irá incluir uma linha de código no local desejado.
//Caso o arquivo php não esteja na mesma pasta, será necessário  indicar o caminho.
//O interessante é que ele irá fechar as tags exatamente após o conteúdo contido nesse aqrquivo, ou seja, após </aside>.
/* Para entender mais sobre os comando include e require, assistir a aula 22 do canal Programação Web - https://youtu.be/dpsdVhsaFWY*/
?>
<!--Para cada página do site, esse é o único conteúdo que mudará, o restante será carregado pelo php.-->
<article>

<h2>Título do model</h2>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi quia, debitis eaque repellat quae hic fuga explicabo quos temporibus rerum! Unde numquam possimus in sint commodi tenetur sequi placeat est!</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, temporibus? Asperiores dolorem, in, facilis earum debitis nobis amet nostrum odit obcaecati velit consectetur soluta nemo enim saepe non laborum distinctio.</p>
<img src="https://picsum.photos/200/200" alt="Imagem aleatória">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eum inventore doloremque deserunt beatae veritatis vitae soluta magnam provident totam perferendis debitis consequatur deleniti iste impedit porro delectus, quam animi?</p>
<h3>Links legais:</h3>
<ul>
    <li><a href="https://github.com/Luferat">GitHub do Fessô</a></li>
    <li><a href="https://youtube.com">Vídeo legais</a></li>
    <li><a href="https://instagram.com">Instagram da galera</a></li>
</ul>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo asperiores placeat nostrum totam, a numquam ipsam reiciendis veniam vitae nihil amet quasi eum in quia, explicabo similique eos aut. Similique?</p>

</article>

<aside>

<h3>Barra lateral do model</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores placeat ullam blanditiis, inventore expedita earum non voluptate voluptatum.</p>

</aside>
<!--Aqui eu incluo o código contido no arquivo _footer.php-->
<?php include('_footer.php'); //O ponto e vírgula é opcional para códigos de uma única linha ?>
<!--Além do include, tem também o "require('a.php');" "include-once('a.php');" e "require-once('a.php');"
A diferença é que o include consegue carregar a página mesmo se o arquivo 'a.php' não existir.
Já o require só carregará se o arquivo 'a.php' existir.
O 'require-once' e o 'include-once'  é utilizado quando se quer incluir o mesmo código mais uma vez.-->