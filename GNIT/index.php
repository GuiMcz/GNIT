<?php

include 'configs/conexao.php';

if (isset($_POST['btn_lgn'])) :
  $erros = array();
  $login = $conn->real_escape_string($_POST['login']);
  $senha = $conn->real_escape_string($_POST['psw']);

  if (isset($login) || isset($senha)) {
    $sql_code = "SELECT * FROM usuário WHERE lg_usu = '$login' AND sen_usu = '$senha'";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do codigo SQL: " . $conn->error);

    $qtd = $sql_query->num_rows;

    if ($qtd == 1) {
      $usuario = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id'] = $usuario['cd_usu'];
      $_SESSION['nome'] = $usuario['nome_usu'];

      header("Location: propriedades.php");
    } else {
      $erros[] = "<p> Falha ao logar! Verifique o login e a senha. </p>";
    }
  }
endif;
?>

<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GNIT - Login</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
  <div class="login-page">
    <div class="form">
      <form action="" class="login-form" method="POST">
        <img src="img/nit.jpg" />
        <?php
        if (!empty($erros)) :
          foreach ($erros as $erro) :
            echo $erro;
          endforeach;
        endif;
        ?>
        <input type="text" name="login" placeholder="login" required="true" />
        <input type="password" name="psw" placeholder="senha" required="true" />
        <button type="submit" class="btn btn-default" name="btn_lgn">Entrar</button>
        <!-- <input class="btn-success" type="submit" value="Enviar"/> -->
        <!-- <a href="index.php"><button>login</button></a> -->
        <p class="message">Primeiro acesso? <a href="cadastro.php">Cadastre-se já!</a></p>
        <p class="message">Esqueceu sua senha? <a href="esquecisenha.php">Clique aqui</a></p>
      </form>
    </div>
  </div>
</body>

</html>