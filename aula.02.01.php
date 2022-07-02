<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2.1</title>
</head>
<body>
    <h1>Olá mundo em PHP</h1>
    <!--O código PHP será sempre iniciado e finalizado como o exemplo abaixo-->
<p><?php echo"Olá Mundo"?></p>
<div id="conta">
    <?php
    echo 10 + 10;
    ?>
    <div id="teste">
        <!--A forma abaixo funciona também para PHP, mas não é aconselhável usar-->
        <?= "Olá Terra!" ?><br>
        <?php echo '<img src="https://is1-ssl.mzstatic.com/image/thumb/Purple126/v4/8c/e8/95/8ce895c6-4379-96ab-96df-59455de78508/source/60x60bb.jpg" alt="Imagi">'
        //Isso é um comentário em PHP
        /*
        ISSO
        TAMBÉM
        É
        UM
        COMENTÁRIO 
        EM PHP
        */ 
         ?>
        

    </div>
</div>
</body>

</html>