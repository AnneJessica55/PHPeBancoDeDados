

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digite os Números</title>
    <style>
        body{
            display: flex;
            width: 100vw;
            height: 100vh;
            margin: 0;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        .form{
            margin-top:50px;
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            align-items: center;
            padding-top: 5%;
            padding-bottom: 5%;
            max-width: 500px;
            background: #f5f5f5;
            box-shadow: 0px 0px 15px #909090;
        }
            label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
        margin-top: 20px;
    }

    input {
        width: 400px;
        height: 40px;
        padding-left: 15px;
        border: 1px solid #b4b4b4;
        border-radius: 5px;
    }
    button {
    display: block;
    width: 400px;
    height: 50px;
    margin-top: 50px;
    background: #359942;
    border: none;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    transition: 0.5s;
}
h1 {padding:20px;
text-align:center; }   
    </style>

</head>
<body>
    
    
    <div class="form">
       <h1>Esse aqui é um exercício extra de formulários.</h1> 
      <form method="post" action="calculo.php">
        <label for="numero1">Digite aqui o primeiro número:</label>
        <input type="number" name="num1" id="numero1" required><br>
        <label for="numero2">Digite aqui o segundo número:</label>
        <input type="number" name="num2" id="numero2" required><br>
        <button type="submit">Calcular</button>
    </form>  
    </div>
    
</body>
</html>