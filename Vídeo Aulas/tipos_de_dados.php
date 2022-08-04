<?php
include("header.php");
$page_title = "Tipos de Dados";
/*
TIPOS DE DADOS:
STRING: [palavras];
*/
$nome = "Jurandir";
echo "<p>Olá, $nome.</p>";

/*
INTEGER: [Números inteiros];
*/
$inteiro = 5;
echo "<p>$inteiro é um número inteiro.</p>";
/*
FLOAT: [Números reais];
*/
$flo = 1/3;
echo"<p>$flo é um float, pois ele não é um número inteiro</p>";
var_dump($flo);

/*
BOOLEAN: [True or False];
*/
$titulo = "Mundial";
if($titulo == "Mundial" or "Cariocão"){
    $truefalse = false;
} else{
     $truefalse= true;
}
echo "<p>Palmeiras tem $titulo?</p>
<p>$truefalse</p>";
var_dump($truefalse);

/*
ARRAY:[Matriz];
*/
$dostoievski = array("Crime e Castigo", "Os Irmãos Karamazov","O Iditota",
"Memórias do Subssolo", "Os Demônios");
var_dump($dostoievski);

/*
OBJECT:[Objeto];
Os objetos precisam ser criados  através de classes instanciadas. Veja o exemplo abaixo.
*/  

class dostoievski {
    //atributos básicos de um objeto.
    public$nome;
    public $gen;
    public $editora;
    //Essa função é um construtor de objetos em relação aos atributos.
    public function __construct($nome, $gen, $editora){
        $this->nome = $nome;
        $this->genero = $gen;
         $this->editora = $editora;
    }
    //Mensagem para expor os atributos do objeto.
    public function mensagem(){
        return "O livro $this->nome é um livro de $this->genero e da editora $this->editora.";
    }
    
}
$livro1 = new dostoievski("O sonho de um homem ridículo", "conto", "Editora 34");
$livro2 = new dostoievski("Crime e Castigo", "romance", "Editora 34");

    echo $livro2->mensagem();
    echo "<br>";
  var_dump($livro2);
  
/*
NULL:[Nulo];
*/
$x = null;
var_dump($x);

/*

Para saber as informações de uma variável, é possível utilizar o var-dump():
*/
var_dump($nome);

include("footer.php");

?>
