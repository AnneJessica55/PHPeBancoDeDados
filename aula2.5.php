<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2.5 - Looping FOR</title>
</head>
<body>
    <h1>Loop - Tabuada</h1>
    <?php
    echo "<hr>";
    for($num = 0; $num<=10;$num++){
        echo" Tabuada de {$num}";
    echo "<hr>";
    for($i = 0; $i<=10; $i++){
        $result = $num * $i;
        echo "{$num} x {$i} = {$result}<br>";
    }
    echo "<hr>";
}
    
    
    ?>
    
</body>
</html>