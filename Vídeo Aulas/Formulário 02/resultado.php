<?php
$nome = isset($_POST["nome"])?$_POST["nome"]:"Não Informado";
$anonascimento = isset($_POST["anonascimento"])?$_POST["anonascimento"]:"Não informado";
$genero = isset($_POST["genero"])?$_POST["genero"]:"Não informado";
$idade = $anonascimento!=="Não informado"?date("Y") - $anonascimento:"Impossível calcular";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        body{
            text-align:center;
            font-family:Arial;
        }
        a{
            text-align:left;
        }
    </style>
</head>
<body>
    <h1>Seus dados abaixo.</h1>
    <p>Nome: <?php echo($nome);?></p>
    <p>Ano de Nascimento: <?php echo($anonascimento);?></p>
    <p>Idade: <?php echo($idade);?></p>
    <p>Gênero: <?php echo($genero);?></p>
    <a href="formulario02.php">Voltar</a>
</body>
</html>