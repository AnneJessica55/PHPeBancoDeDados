<?php

$page_title = 'PHP Aula 2.3 - HereDoc';

$ch4 = '

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$page_title}</title>
</head>
<body>

<h1>HereDoc</h1>
    
</body>
</html>
';

echo $ch4;

?>

<?php

$page_title = 'PHP Aula 2.3 - HereDoc';

$c2h2 = <<<biscoito
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$page_title}</title>
</head>
<body>

<h1>HereDoc</h1>
    
</body>
</html>
biscoito;

echo $c2h2;


?>