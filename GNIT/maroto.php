<html lang="pt-BR">

<head>

  <meta charset="UTF-8" />
  <title>Espaço NIT- Projetos</title>
  <meta charset="UTF-8">


  <!--Os arquivos Meta-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content"Projeto Espaço NIT">
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
        <span class="navbar-brand" href="index.php"><b>Espaço NIT</b></span>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="tela_principal.php">DashBoard</a></li>
          <li><a href="portflio.php">Portfólio</a></li>
          <li><a href="quem.php">Quem Somos</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><a href="www.facebook.com/nit.ifal">Fan Page</a></li>
          <li><a href="https://www.instagram.com/NIT.IFAL">Instagram</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">


          <!--<li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>-->
          <div id="perfil">
            <span style="vertical-align:middle; padding-right:10px"> <i>Danillo Souza</i></span>
            <a href="#"><img src="http://placehold.it/40x40/ffffff" class="img-circle"></a>
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
        <p><img src="img/nit.png" style="margin-left:15px"></p>
        <ul class="nav nav-pills nav-stacked">
          <li role="presentation"><a href="tela_principal.php"><img src="img/dashboard.png"> DashBoard</a></li>
          <li role="presentation" class="active"><a href="projetos.php"><img src="img/carrinho.png"> Todos os Projetos</a></li>
          <li role="presentation"><a href="meusprojetos.php"><img src="img/ticket.png"> Meus Projetos</a></li>
          <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
          <li role="presentation"><a href="login.php"><img src="img/sair.png"> Sair</a></li>
        </ul>
      </div>
      <!--Final Menu Esquerdo-->

      <div class="col-md-10" id="conteudo">
        <div class="row" id="ultimosproj">
          <h1>Mais Detalhes</h1>
          <hr>
          </hr>
          <div class="media">
            <div class="media-left media-middle">
              <a href="#">
                <img class="media-object" src="img/ex1.jpg" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Consequências da Terceirização no Setor Público</h4>
              <p>Orientador: Prof. Mônica Ximenes</p>
              <!-- Large modal -->
              <p><a data-toggle="modal" data-target=".bs-example-modal-lg" href="#">Sobre o Projeto</a></p>

              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <h1>Consequências da Terceirização no Setor Público</h1>
                    <p>No Brasil, temos o hábito de atacar as consequências, não as causas dos problemas. Criamos o Bolsa-Família para combater a miséria, mas não garantimos educação básica de qualidade a todos. Para impedir que a indústria nacional seja esmagada, taxamos as importações, ao invés de baratearmos os nossos produtos. Para combater a inflação, o governo represa tarifas públicas, em lugar de acabar de desindexar nossa economia.</p>
                    <p>Com a terceirização não é diferente. O objetivo é gerar ganhos de eficiência que reduzam custos de produção. Isto é possível porque a nova empresa, aquela que se dedica exclusivamente ao serviço terceirizado, torna-se mais eficiente e pode atender novos clientes com funcionários que antes ficavam parcialmente ociosos. Especialização e escala geram eficiência e desenvolvimento.</p>
                  </div>
                </div>
              </div>

              <p>Quantidade de Bolsistas: <span style="color:green;">2/3</span></p>
              <p>Pré - Requisito:</p>
              <ul>
                <li>Não ter Vínculo Empregatício</li>
                <li>Ter Coeficiente >=7,0</li>
                <li>Ter interesse na área de terceirização</li>
                <li>Ser Comprometido</li>
              </ul>
              <br>
              <p><a href="aprovacaoinscricao.php" class="btn btn-danger btn-lg" role="button">Inscrever-se</a>

            </div>



          </div>
          <hr>
          <footer>
            <h3>&copy Espaço NIT - Todos os Direitos Reservados</h3>
          </footer>
        </div>
        <!--Final do Container Principal -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
          $(document).ready(function() {
            $('#abrir').click(function() {
              $('#myModal').modal({
                show: true
              })
            });
            $(document).on('show.bs.modal', '.modal', function(event) {
              var zIndex = 1040 + (10 * $('.modal:visible').length);
              $(this).css('z-index', zIndex);
              setTimeout(function() {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
              }, 0);
            });
          });
        </script>
</body>

</html>