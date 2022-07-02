<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aula 2.2</title>
</head>
<body>
    
    <h1>Variáveis</h1>

    <?php
    
    //Define uma variável:
    $color;
    /*
    Todas as variáveis no PHP são locais
    PHP é uma linguagem casesensitive
    */
    $house_color;
    $house_color = "Azul";
    $text = "A cor da 
    casa é ". $house_color;
    $text2 = "<br>A cor da casa é {$house_color}";
    //Para interpolar, diferente do javascript, são utilizadas as aspas duplas "
    $text3 = "<br>A cor da \"casa\" é {$house_color}";
    //Para utilizar as aspas dentro da vaiável sempre se utiliza a barra\ antes das "

    echo $text; 
    echo $text2;
    echo $text3;

    ?>

    

</body>
</html>