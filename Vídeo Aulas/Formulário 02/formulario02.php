
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 02</title>
    <style>
        body{
            margin:0;
            display:flex;
            width:100vw;
        }
        main{
            width:500px;
            margin:auto;
            display:flex;
            justify-content: center;
            align-items:center;
            flex-direction:column;
        }
        label{
            display: block;
            font-family:arial;
        }
        input{
            width:400px;
            height:30px;
            margin:auto;
        }
        .genero{
            display:flex;
            flex-direction: row;
            justify-content:space-between;
            align-items:center;
        }
        .genero > input {
            width:20px;
            vertical-align:center;
        }
        .genero > label {
            display:block;
            padding: 0 5px;
            vertical-align:center;
        }
    </style>
</head>
<body>
    <main>
        <h1>Formulário de cadastro</h1>
        <form method="post" action="resultado.php">
            <label for="name">Nome:</label>
            <input type="text" name="nome" id="name" placeholder="Digite seu nome aqui" required>
            <label for="birthyear">Ano de Nascimento:</label>
            <input type="number" name="anonascimento" id="birthyear" placeholder="Digite sua idade em anos aqui" required>
            <div class="genero">
                <label for="gender">Gênero:</label><br>
                <input type="radio" name="genero" value="feminino" id="female">
                <label for="female">Feminino</label>
                <input type="radio" name="genero" value="masculino" id="male">
                <label for="male">Masculino</label>
                <input type="radio" name="genero"value="nbinario" id="nobinary">
                <label for="nobinary">Não Binário</label>
                <input type="radio" name="genero" value="Outros" id="others">
                <label for="others">Outros</label>
                
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
    
</body>
</html>