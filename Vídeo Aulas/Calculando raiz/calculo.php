<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$soma = $num1 + $num2;
$sub = $num1>$num2?$num1-$num2:$num2-$num1;
$prod = $num1 * $num2;
$div = number_format($num1>$num2?$num1/$num2:$num2/$num1, 2);
$rq1 = number_format(sqrt($num1), 2);
$rq2 = number_format(sqrt($num2), 2);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
    <style>
        p{
            text-align:center;
            font-family:arial;
        }
    </style>
</head>
<body>
    
    <p>O resultado da soma de <?php echo($num1);?> e <?php echo($num2);?> é igual a <?php echo($soma);?></p>
    <p>O resultado da subtração de <?php echo($num1);?> e <?php echo($num2);?> é igual a <?php echo($sub);?></p>
    <p>O resultado do produto de <?php echo($num1);?> e <?php echo($num2);?> é igual a <?php echo($prod);?></p>
    <p>O resultado da divisão de <?php echo($num1);?> e <?php echo($num2);?> é igual a <?php echo($div);?></p>
    <p>A raíz quadrada de <?php echo($num1);?> é igual a <?php echo($rq1);?></p>
    <p>A raíz quadrada de <?php echo($num2);?> é igual a <?php echo($rq2);?></p>
    <br><br>
    <a href="formulario.php">Voltar</a>
</body>
</html>