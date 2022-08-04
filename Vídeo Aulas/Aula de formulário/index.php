<?php
$erroNome= "";
$erroEmail = "";
$erroSenha = "";
$erroRepeteSenha = "";
//verificar se o método do formulário é o post
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  //verificar se o campo nome está vazio
  if (empty($_POST['nome'])){
    $erroNome = "Por favor, preencha o campo acima com seu nome";
  }else{
    //limpa a variável de códigos maliciosos.
    $nome = limpaPost($_POST['nome']);
    //Verifica se no campo nome foi digtado algum caractere inválido (diferente de letras e espaço).
    if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
      $erroNome = "O nome deve conter apenas letras e espaços em branco.";
    }
  }
  if (empty($_POST['email'])){
    $erroEmail = "Por favor, preencha o campo com o seu e-mail";
  }else{
    $email = limpaPost($_POST['email']);
    //esse filtro analisa se o formato digitado é um o formato de um e-mail.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $erroEmail = "Por favor, preencha o campo com um e-mail válido";
    }
  }

  if (empty($_POST['senha'])){
    $erroSenha = "Por favor, informe uma senha";
}else{
    $senha = limpaPost($_POST['senha']);
    if(strlen($senha) <6){
        $erroSenha = "A senha precisa ter no mínimo 6 dígitos!";
    }
}

  if (empty($_POST['repete_senha'])) {
    $erroRepeteSenha = "Por favor, repita a senha que você digitou acima nesse campo";
  }else{
    $repete_senha = limpaPost($_POST['repete_senha']);
            if($repete_senha !== $senha){
      $erroRepeteSenha = "As senhas não são iguais";
    }
  }
 if (($erroNome == "") && ($erroEmail == "") && ($erroSenha == "") && ($erroRepeteSenha == "")) {
  header('Location: ../obrigada.php');
} 
}
function limpaPost($valor){
$valor = trim($valor);
$valor = stripcslashes($valor);
$valor = htmlspecialchars($valor);
return $valor;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulário</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <main>
    <h1><span>AULA PHP</span><br>Validação de Formulário</h1>

     <form method="post">

        <!-- NOME COMPLETO -->
        <label> Nome Completo </label>
        <input type="text" <?php if (!empty($erroNome)){ echo('class="invalido"');}?> <?php if (isset($_POST['nome'])){ echo "value='".$_POST['nome']."'";} ?> name="nome" placeholder="Digite seu nome" required>
        <br><span class="erro"><?php echo($erroNome);?></span>

        <!-- EMAIL -->
        <label> E-mail </label>
        <input type="email" <?php if (!empty($erroEmail)){ echo('class="invalido"');}?> <?php if (isset($_POST['email'])){ echo "value='".$_POST['email']."'";} ?> name="email" placeholder="email@provedor.com" required>
        <br><span class="erro"><?php echo($erroEmail);?></span>

        <!-- SENHA -->
        <label> Senha </label>
        <input type="password" <?php if(!empty($erroSenha)){echo "class='invalido'";}?> <?php if (isset($_POST['senha'])){ echo "value='".$_POST['senha']."'";} ?>  name="senha" placeholder="Digite uma senha">
        <br><span class="erro"><?php echo $erroSenha; ?></span>

        <!-- REPETE SENHA -->
        <label> Repete Senha </label>
        <input type="password" <?php if(!empty($erroRepeteSenha)){ echo('class="invalido"');}?> <?php if (isset($_POST['repete_senha'])){ echo "value='".$_POST['repete_senha']."'";} ?> name="repete_senha" placeholder="Repita a senha" required>
        <br><span class="erro"><?php echo($erroRepeteSenha);?></span>

        <button type="submit"> Enviar Formulário </button>

      </form>
    </main>
</body>
</html>