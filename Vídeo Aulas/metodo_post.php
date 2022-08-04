<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Nesse caso não há ação e as respostas do formulário serão armazenados nas variáveis$nome e $idade-->
   <form action=""  method="post">
    <input type="text" name="nome" placeholder="Digite seu nome."><br>
    <input type="text" name="idade" placeholder="Digite sua idade."><br>
    <hr><button type="submit">Enviar</button><br>
    </form>
    <?php
    if(isset($_POST['nome']) && isset($_POST['idade'])){
        $nome = limpaVar($_POST['nome']);
        $idade = limpaVar($_POST['idade']);

        echo "<h1>Confirme seu nome e sua idade.</h1>
        <p>Seu nome é $nome e você tem $idade anos?</p>";
    }
    //Antes de executar o código devemos tomar pecauções para que nossa variável não comporte códigos maliciosos.
    function limpaVar($valor){
        //A função trim elimina espaços sobrando no final e no início do código. Também elimina quebras de linhas.
        $valor =trim($valor);
        //A função stripslashes elimina caracteres / da variável.
        $valor = stripslashes($valor);
        //htmlspecialchar é uma função que impede a execução de códigos maliciosos.
        $valor = htmlspecialchars($valor);
        return $valor;
    }
    echo "<hr>";
    ?>
    <form action="receber.php"  method="post">
    <input type="text" name="livro" placeholder="Digite seu livro favorito."><br>
    <input type="text" name="autor" placeholder="Digite o nome do autor."><br>
    <hr><button type="submit">Enviar</button><br>
    </form>





</body>
</html>
