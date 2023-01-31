<html lang="pt-BR">
	<head>
        
		<title>FAQ - GNIT</title>
		<meta charset="UTF-8" />
        <meta charset="UTF-8">
	   
		
		<!--Os arquivos Meta-->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content = "Projeto GNIT">
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
            	<span style="vertical-align:middle; padding-right:10px"> <i>Danillo Souza</i></span>
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
  				  <li role="presentation" ><a href="propriedades.php"><img src="img/dashboard.png"> DashBoard</a></li>
  				  <li role="presentation"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Notificações</a></li>
  				  <li role="presentation"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
  				  <li role="presentation" class="active"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
				    <li role="presentation"><a href="index.php"><img src="img/sair.png"> Sair</a></li>
				  </ul>
    		</div> <!--Final Menu Esquerdo-->
    		
        <div class="col-md-10" id="conteudo">
         <div class="row">

          <h3 class="page-header">GNIT - Perguntas e Respostas </h3>
		  <br></br>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   O que é o GNIT?
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <img src="img/desktop.png" style="float:left; margin-right:10px; margin-bottom:10px; margin-left:10px; margin-top:5px;" />
                <div class="panel-body">
                Este projeto surgiu com o intuito de ajudar a quebrar o deficit no quesito automoção e gerenciamento de informações das propriedades intelectuais sob posse dos Núcleos de Inovação Tecnológica (NIT), disponibilizando informações como:
					  <ul id="lista" type = "none">
				<li>Armazenamento e Gerenciamento das propriedades Intelectuais;</li>
				<li>Alertas a respeito das taxas que devem ser pagas pelo NIT (anuidades);</li>
				<li>Alerta a respeito dos inventos pertencentes aos NITs que foram disponibilizados nas revistas do INPI do dia.</li>
			
					 </ul>
		 
				</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Como funciona o GNIT?
                   
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <img src="img/post-g.png" style="float:left; margin-right:10px; margin-bottom:10px; margin-left:10px; margin-top:5px;" />
                <div class="panel-body">
                  O Servidor/Bolsistas terá que ter o feito o cadastro, após isso o mesmo terá acesso a todas as funcionalidades disponíveis.
                </div>
              </div>
            </div>
           
             <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                   Será cobrado taxa de adesão, taxa de renovação para utilização da plataforma?
                  </a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <img src="img/solucao.png" style="float:left; margin-right:10px; margin-bottom:10px; margin-left:10px; margin-top:5px;" />
                <div class="panel-body">
                  Não. O serviço é inteiramente gratuito. Com fins Institucionais, o sistema tem como base incentivar otimizar e desburocratizar serviços e atividades rotineiras.
                </div>
              </div>
            </div>
             <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 Ainda tenho dúvidas, como posso entrar em contato?
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <img src="img/news.png" style="float:left; margin-right:10px; margin-bottom:10px; margin-left:10px; margin-top:5px;" />
                <div class="panel-body">
                 O usuário deverá enviar um e-mail para o nit@ifal.edu.br.
                </div>
              </div>
            </div>
          </div>

        </div> <!--Fim da Row-->
            
    		</div> <!--Fim do conteúdo-->

    	</div>
      <hr>
      <footer>
       <h3>&copy GNIT - Todos os Direitos Reservados</h3>
      </footer>
    </div>	<!--Final do Container Principal -->

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>
