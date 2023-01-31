<html lang="pt-BR">
	<head>
        
		<meta charset="UTF-8" />
		<title>GNIT - Contato</title>
        <meta charset="UTF-8">
	   
		
		<!--Os arquivos Meta-->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content = "GNIT">
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
            <li class="active"><a href="contato.php">Contato</a></li>
 
           
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
  				  <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
				    <li role="presentation"><a href="index.php"><img src="img/sair.png"> Sair</a></li>
				  </ul>
    		</div> <!--Final Menu Esquerdo-->
    		
        <div class="col-md-10" id="conteudo">
           <div class="row" id="contato">
            <div class="col-md-5" id="mapa">
            <h1 style="margin-left:40px">Nossa Localização</h1>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.3266803626198!2d-35.70508358595566!3d-9.653102693089503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x70145b18bc0df7f%3A0x839fa83cba25bc6d!2sReitoria+do+Instituto+Federal+de+Alagoas+-+IFAL!5e0!3m2!1spt-BR!2sbr!4v1552273419057" width="400" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          <div class="col-md-4"/>  
            <form>
              <h1 style="text-align:center">Contato</h1>
                <div class="form-group">
                  <label for="exampleInputEmail1">E-mail</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Assunto</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <p class="help-block">Escreva aqui seu Texto.</p>
                  <textarea class="form-control" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success ">Enviar Agora</button>
              </form>

          </div>
          <br>
          <div class="col-md-1" id="cont">
             
              <h4>Telefone:</h4>
              <h3> (82)3194-1127</h3>
              <h5>Seg à Sex, 08:00h às 18:00h</h5>


          </div>

          
        </div><!-- Fim da row-->
            
    		</div> <!--Fim do conteúdo-->

    	</div>
      <hr>
      <footer>
       <h3>&copy GNIT - Todos os Direitos Reservados</h3>
      </footer>
    </div>	<!--Final do Container Principal -->

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')})
    </script>

    </body>
</html>