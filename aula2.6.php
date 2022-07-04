<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aula 2.7</title>
</head>

<body>

    <h1>Funções</h1>

    <?php

    // Define uma função:
    function sum_numbers($num1, $num2)
    {
        // Testa se num é positivo:
        if ($num1 < 0 or $num2 < 0) {
            return 'ERRO!';
        } else {
            return $num1 + $num2;
        }
    }

    // Invocar a função:
    $result = sum_numbers(-4, 2);

    // Envia para o cliente:
    echo 'O resultado da soma entre 4 e 6 é ' . $result;

    ?>

</body>

</html>