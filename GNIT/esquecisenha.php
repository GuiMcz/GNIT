<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Esqueci a Senha - GNIT</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
  </head>
  <body>
    <div class="esqueci-senha">
      <div class="form">
        <form action="index.php" class="login-form">
          <img src="img/nit.jpg" />
          <input
            type="text"
            placeholder="Digite o E-mail para Recuperar Senha"
            required="true"
          />

          <button type="submit" class="btn btn-default">Enviar</button>
          <!-- <input class="btn-success" type="submit" value="Enviar"/> -->
          <!-- <a href="index.php"><button>login</button></a> -->
          <p class="message">
            Lembrou o Login?
            <a href="propriedades.php">voltar para página inicial</a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
