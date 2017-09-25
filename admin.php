<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Admin</title>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" type="text/css" href="css/estilo.css">

	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	    <link rel="stylesheet" type="text/css" href="css/scrolling-nav.css">

		<link rel='stylesheet' href="css/perfect-scrollbar.css">

		<link rel="stylesheet" href="css/clndr.css" type="text/css" />

		<link rel="stylesheet" type="text/css" href="css/sala.css">

	    <link rel="shortcut icon" type="imagem/x-icon" href="img/icon.ico"/>

	    <style type="text/css">
	    	.navbar{
	    		background: #3c4759;
	    		border: none;
	    	}
	    </style>

	</head>
	<body>
		<?php
			include('cabecalho_logado.php');
		?>
		<div class="container-fluid fundo_admin espaco_cabecalho">
			<?php
				include ('menu_admin_lateral.php');
			?>

				<div class=" col-xs-offset-3 col-xs-9 letra_branca">


					<div id="professor" class="section linha">
							<div class="text-left"><h1>Lista de professores</h1></div>
								<div class="scroll_direita">
									<table class="table">	
										<thead>
											<tr class="letra_amarela">
												<td class="text-center"></td>
												<td class="text-center"><h3>Nome</h3></td>
												<td class="text-center"><h3>Link Imagem</h3></td>
												<td class="text-center"><h3>Aprovar</h3></td>
												<td class="text-center"><h3>Reprovar</h3></td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center"><img src="img/icones/admin/professor.png" width="30px"></td>
												<td class="text-center">Gabriel Fernando</td>
												<td class="text-center">SLa</td>
												<td class="text-center"><img src="img/icones/admin/ok.png"></td>
												<td class="text-center"><img src="img/icones/admin/remove.png"></td>
											</tr>

											<tr>
												<td class="text-center"><img src="img/icones/admin/professor.png" width="30px"></td>
												<td class="text-center">João Vitor Daniel</td>
												<td class="text-center">SLa</td>
												<td class="text-center"><img src="img/icones/admin/ok.png"></td>
												<td class="text-center"><img src="img/icones/admin/remove.png"></td>
											</tr>

											<tr>
												<td class="text-center"><img src="img/icones/admin/professor.png" width="30px"></td>
												<td class="text-center">Raul Carvalho dos Santos</td>
												<td class="text-center">SLa</td>
												<td class="text-center"><img src="img/icones/admin/ok.png"></td>
												<td class="text-center"><img src="img/icones/admin/remove.png"></td>
											</tr>

											<tr>
												<td class="text-center"><img src="img/icones/admin/professor.png" width="30px"></td>
												<td class="text-center">Caique Henrique dos Santos</td>
												<td class="text-center">SLa</td>
												<td class="text-center"><img src="img/icones/admin/ok.png"></td>
												<td class="text-center"><img src="img/icones/admin/remove.png"></td>
											</tr>

											<tr>
												<td class="text-center"><img src="img/icones/admin/professor.png" width="30px"></td>
												<td class="text-center">Stela Santos</td>
												<td class="text-center">SLa</td>
												<td class="text-center"><img src="img/icones/admin/ok.png"></td>
												<td class="text-center"><img src="img/icones/admin/remove.png"></td>
											</tr>

											<tr>
												<td class="text-center"><img src="img/icones/admin/professor.png" width="30px"></td>
												<td class="text-center">Raquel Ingrid</td>
												<td class="text-center">SLa</td>
												<td class="text-center"><img src="img/icones/admin/ok.png"></td>
												<td class="text-center"><img src="img/icones/admin/remove.png"></td>
											</tr>
										</tbody>
									</table>
							</div>
					</div>


					<div id="usuario" class="section linha">
							<form>
								<div class="text-left">
									<div class="col-xs-3">
										<h2>Buscar Usuário</h2>
									</div>
									<div class="col-xs-6 top">
										<input type="text" name="usuario" class="form-control">
									</div>
									<div class="col-xs-3 top">
										<input type="submit" name="buscar_usuario" class="btn botao_amarelo">
									</div>
								</div>
							</form>
							<div class="scroll_direita">
								<table class="table text-center">
									<thead class="letra_amarela">
										<tr>
											<td><img src="img/icones/admin/user.png" width="40px"></td>
											<td>Nome</td>
											<td>Banir</td>
											<td>Notificar</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><img src="img/icones/admin/girl.png" width="40px"></td>
											<td>Yasmin Freitas</td>
											<td><img src="img/icones/admin/remove-user.png" width="40px"></td>
											<td><img src="img/icones/admin/danger.png" width="40px"></td>
										</tr>

										<tr>
											<td><img src="img/icones/admin/man.png" width="40px"></td>
											<td>Iago Freitas</td>
											<td><img src="img/icones/admin/remove-user.png" width="40px"></td>
											<td><img src="img/icones/admin/danger.png" width="40px"></td>
										</tr>

										<tr>
											<td><img src="img/icones/admin/girl.png" width="40px"></td>
											<td>Thaina Cristina</td>
											<td><img src="img/icones/admin/remove-user.png" width="40px"></td>
											<td><img src="img/icones/admin/danger.png" width="40px"></td>
										</tr>

										<tr>
											<td><img src="img/icones/admin/man.png" width="40px"></td>
											<td>Alan Bruno</td>
											<td><img src="img/icones/admin/remove-user.png" width="40px"></td>
											<td><img src="img/icones/admin/danger.png" width="40px"></td>
										</tr>

										<tr>
											<td><img src="img/icones/admin/man.png" width="40px"></td>
											<td>Caique Bueno</td>
											<td><img src="img/icones/admin/remove-user.png" width="40px"></td>
											<td><img src="img/icones/admin/danger.png" width="40px"></td>
										</tr>
									</tbody>
								</table>
							</div>
					</div>


					<div id="conteudo" class="section text-center baixo">
							<div class="text-left"><h2>Inserir conteúdos</h2></div>
							<div class="col-xs-12">
								<label class="control-label">Escolha a página do Ebook:</label>
									<select class="form-control">
										<option>Escolha a página</option>
										<option>Index</option>
										<option>Descontos</option>
									</select>
							</div>

							<div class="col-xs-12">
								<label class="control-label">Titulo do Ebook</label>
									<input type="text" name="" class="form-control">
							</div>

							<div class="col-xs-12">
								<label class="control-label" for="file">Escolha um arquivo:</label>
								<input type="file" name="imagem_admin" class="form">
							</div>

							<div class="col-xs-12 linha">
								<br>
								<input type="submit" class="btn botao_amarelo" name="inserir_ebook" value="Inserir Ebook">
							</div>
					</div>

					<div id="desconto" class="section">
							<div class="text-left"><h2>Inserir bolsas</h2></div>
							<div class="col-xs-12">
								<label class="control-label">Nome do curso:</label>
								<input type="text" name="nome_curso" class="form-control">
							</div>

							<div class="col-xs-12">
								<label class="control-label">Faculdade:</label>
								<input type="text" name="" class="form-control">
							</div>

							<div class="col-xs-12">
								<label class="control-label" for="file">Escolher foto faculdade:</label>
								<input type="file" name="imagem_admin_faculdade">
							</div>

							<div class="col-xs-12">
								<div class="col-xs-6 espaco_left_mesma_linha">
									<label class="control-label" for="file">Valor sem MandaBrain:</label>
									<input type="text" name="sem_mandabrain" class="form-control">
								</div>
								<div class="col-xs-6 espaco_rigth_mesma_linha">
									<label class="control-label" for="file">Valor com MandaBrain:</label>
									<input type="text" name="com_mandabrain" class="form-control" >
								</div>
							</div>

							<div class="col-xs-12 text-center linha">
								<br>
								<input type="submit" class="btn botao_amarelo" name="inserir_ebook" value="Inserir Ebook">
							</div>
					</div>

				</div>
			</div>
		</div>

		
		<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
    
        <script src="js/jquery.easing.min.js"></script>
    
        <script src="js/scrolling-nav.js"></script>

        <!--Perfect ScrollBar-->

        <script src="js/jquery_aja.js"></script>	

		<script src="js/perfect-scrollbar.min.js"></script>
 
      <?php
      	include('rodape.php');
      ?>
	</body>
</html>