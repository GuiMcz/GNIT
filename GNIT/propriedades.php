<?php

include 'configs/conexao.php';

if (!isset($_SESSION)) {
  session_start();
}
?>


<html lang="pt-BR">

<head>

  <meta charset="UTF-8" />
  <title>GNIT</title>
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
  <!-- Fixed navbar -->
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
            <span style="vertical-align:middle; padding-right:10px"> <i><?php echo $_SESSION['nome'] ?></i></span>
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
          <li role="presentation" class="active"><a href="propriedades.php"><img src="img/dashboard.png"> DashBoard</a></li>
          <li role="presentation"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Notificações</a></li>
          <li role="presentation"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
          <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
          <li role="presentation"><a href="index.php"><img src="img/sair.png"> Sair</a></li>
        </ul>
      </div>
      <!--Final Menu Esquerdo-->

      <div class="col-md-10" id="conteudo">


        <div class="row" id="ultimosproj">
          <h2 class="margem">Selecione a propriedade intelectual desejada</h2>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="patente.php">
                <img src="img_novas/Coloridos/JPEG/Colorido_1.jpg" alt="...">
                <div class="caption">
                  <h3 class="corverde">Patente</h3>
                  <h4 style="text-align:justify;">Macro-Área responsável pelas patentes de invenção e modelo de utilidade.</h4>


                </div>
            </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="software.php">
                <img src="img_novas/Coloridos/JPEG/Colorido_2.jpg" alt="...">
                <div class="caption">
                  <h3 class="corverde">Programa de Computador</h3>
                  <h4 style="text-align:justify;">Macro-Área responsável pelos programas de computador.</h4>

                </div>
            </div>

            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="desenho.php">
                <img src="img_novas/Coloridos/JPEG/Colorido_3.jpg" alt="...">
                <div class="caption">
                  <h3 class="corverde">Desenho Industrial</h3>
                  <h4 style="text-align:justify;">Macro-Área responsável pelos desenhos industriais.</h4>

                </div>
            </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="marca.php">
                <img src="img_novas/Coloridos/JPEG/Colorido_4.jpg" alt="...">
                <div class="caption">
                  <h3 class="corverde">Marca</h3>
                  <h4 style="text-align:justify;">Macro-Área responsável pelas Marcas.</h4>

                </div>
            </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="#">
                <img src="img_novas/Coloridos/JPEG/Colorido_5.jpg" alt="...">
                <div class="caption">
                  <h3 class="corverde">Direito Autoral</h3>
                  <h4 style="text-align:justify;">Macro-Área responsável pelo Direito Autoral.</h4>

                </div>
            </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="#">
                <img src="img_novas/Coloridos/JPEG/Colorido_6.jpg" alt="...">
                <div class="caption">
                  <h3 class="corverde">Cultivares</h3>
                  <h4 style="text-align:justify;">Macro-Área responsável pelos Cultivares.</h4>

                </div>
            </div>
            </a>
          </div>


        </div> <!-- Ultimos Produtos-->
      </div>
      <!--Fim do conteúdo-->

    </div>
    <hr>
    <footer>
      <h3>&copy GNIT - Todos os Direitos Reservados</h3>
    </footer>
  </div>
  <!--Final do Container Principal -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>