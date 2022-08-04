<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Aula de $page_title"?></title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400;500;600;700&family=Grandstander:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,100;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,700;0,900;1,200;1,300;1,400;1,700&display=swap');
    body{
        margin: 0%;
        background: fixed linear-gradient(45deg, #FF006A, #FFBA49);
        text-align:center;
    }
    header{
        margin: 0%;
    }
    header > h1{
        font-family: 'Grandstander','Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: #00E5E8;
        text-align: center;
        text-shadow: 1px 2px #005355;
    }
    nav{
       display: flex;
        margin: 1.5%;
        box-shadow: 1px 2px 5px #002f30;
        justify-content: space-between;
        box-sizing: border-box;
        flex-wrap: wrap;
        
    }
    nav > a{
        text-decoration: none;
        font-family:'Edu VIC WA NT Beginner','Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size:20px; 
        color:#23001E;      
    }
    nav > a:hover{
        font-weight: 500;
    }
    main{
        background: rgba(0, 0, 0, 0.445);
        min-height: 70vh;
        display: flex;
        margin: auto;
        box-sizing: border-box;
        
    }
    .expl{
        width:40%;
        min-height:70%;
        display: flex;
        margin: auto;
        background: white;
        justify-content: center;
        padding: 2%;
        flex-direction:column;
        box-sizing: border-box;
    }
    footer{ 
        background-color: #23001E;
        box-shadow: 1px 2px 5px #0a0009;
        text-align: center;
        font-family: 'Nunito','Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color:#FFBA49;
        margin-top:2%;
    }
    footer  a{
        text-decoration: none;
        color: #FFBA49;
    }
    footer a:hover{
        background: #FFBA49;
        color:#23001E;
    }
</style>
<body>
    <header>
        <h1>Aqui estão minhas anotações de aprendizagem</h1>
        <nav>
            <a href="sintaxe.php">|Sintaxe|</a>
            <a href="tipos_de_dados.php">Tipos de Dados|</a>
            <a href="variaveis.php">Variáveis|</a>
            <a href="echo_e_print.php">Echo e Print|</a>
            <a href="manipulacao_string.php">Manipulação de String|</a>
            <a href="manipulacao_numero.php">Manipulação de Número|</a>
            <a href="funcoes_matematicas.php">Funções Matemáticas|</a>
            <a href="constantes.php">Constantes|</a>
            <a href="operadores.php">Operadores|</a>
            <a href="ifelse_e_switch.php">Condicionais|</a>
            <a href="funcoes.php">Funções|</a>
            <a href="arrays.php">|Matrizes e Vetores|</a>
            <a href="superglobais.php">Superglobais|</a>
            <a href="metodo_post.php">Método Post|</a>
            <a href="variaveisvariantes.php">Variáveis variantes</a>
            <a href="operador_unario.php">Operador Unário</a>
            <a href="tabuada.php">For</a>
            <a href="tabuada2.php">While</a>
            <a href="tabuada3.php">DoWhile</a>
            <a href="calculadora.php">Calculadora</a>
            <a href="funcao_ref.php">Função por Referência</a>
            <a href="avaliacao.php">Avaliação</a>
        </nav>
    </header>
    <main>
        <div class="expl">