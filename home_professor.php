<!DOCTYPE html>
<html>
	<head>

		
		<title> Home </title>

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="css/home.css">

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="css/sala_h.css">
		
        <link rel="shortcut icon" type="imagem/x-icon" href="img/icon.ico"/>

        <style type="text/css">
		      .navbar{
		        border: none;
      }
    </style>

	</head>
	<body>
		<?php
			include('cabecalho_logado.php');
		?>

		<div class="container-fluid">
			<div class="row">
				<!-- Home Section -->
		        <section id="home" class="home-section">
		            <div class="container-fluid">
		                <div class="row">
		                    <div class="col-xs-3 borda botao_criar_sala">

		                        <img src="img/padrao.png" width="240" height="240" class="img_usu img-circle">

		                        <h2 class="text-center nome_usu"> Tiago </h2>

		                        <h4><a href="#" class="link"> Alterar Foto </a></h4>

		                        <h2 class="text-center nome_usu"> Minhas Salas </h2>

								<div class="scroll">
									<ul id="lista_participantes">
										<li class="iten_part letra_branca"><img src="img/sala.png" width="40px">&nbsp;&nbsp;Sala de Estudos</li>
										<li class="iten_part letra_branca"><img src="img/sala.png" width="40px">&nbsp;&nbsp;Infonet 3º</li>
										<li class="iten_part letra_branca"><img src="img/sala.png" width="40px">&nbsp;&nbsp;Tecnologia</li>
										<li class="iten_part letra_branca"><img src="img/sala.png" width="40px">&nbsp;&nbsp;Trabalhos</li>	
									</ul>
								</div>

							
							<!-- Button trigger modal -->
							<button type="button" class="btn botao_amarelo btn-lg" data-toggle="modal" data-target="#myModal">
							 <a>	Criar Sala</a>
							</button>							
						</div>

							
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header cor_escura_rodape">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h3 class="modal-title" id="myModalLabel">Criar Sala</h3>
							      </div>
							      <div class="modal-body fundo_admin">
							        <div class="row letra_branca">
								      		<div class="col-xs-6">
								      			<label class="control-label" for="nome_sala">Nome da Sala: </label>
								      			<input type="text" name="nome_sala" class="form-control">
								      		</div>

								      		<div class="col-xs-6">
								      			<label class="control-label" for="tipo_sala">Tipo da sala: </label>
								      			<select class="form-control">
								      				<option>Escolha o tipo da sala</option>
								      				<option>Cursinho</option>
								      				<option>Escola</option>
								      				<option>Faculdade</option>
								      				<option>Outros</option>
								      			</select>

								    		</div>
								    </div>
							<div class="row letra_branca">

								<div class="col-xs-12 ">

						<div class="col-xs-12">
							<form>
								<div class="text-left">
									<div class="col-xs-3">
										<h4>Adicionar aluno</h4>
									</div>
									<div class="col-xs-5 top">
										<input type="text" name="usuario" class="form-control">
									</div>
									<div class="col-xs-4 top">
										<input type="submit" name="buscar_usuario" class="btn botao_amarelo">
									</div>
								</div>
							</form>
							<div class="scroll_direita">
								<table class="table text-center">
									<thead class="letra_amarela">
										<tr>
											<td><img src="img/icones/admin/user.png" width="40px"></td>
											<td><h3>Nome</h3></td>
											<td><h3>Adicionar</h3></td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><img src="img/icones/admin/girl.png" width="40px"></td>
											<td>Yasmin Freitas</td>
											<td><img src="img/icones/admin/ok.png" width="20px"></td>
										</tr>

										<tr>
											<td><img src="img/icones/admin/man.png" width="40px"></td>
											<td>Iago Freitas</td>
											<td><img src="img/icones/admin/ok.png" width="20px"></td>
										</tr>

										<tr>
											<td><img src="img/icones/admin/girl.png" width="40px"></td>
											<td>Thaina Cristina</td>
											<td><img src="img/icones/admin/ok.png" width="20px"></td>
										</tr>

										<tr>
											<td><img src="img/icones/admin/man.png" width="40px"></td>
											<td>Alan Bruno</td>
											<td><img src="img/icones/admin/ok.png" width="20px"></td>
										</tr>

										<tr>
											<td><img src="img/icones/admin/man.png" width="40px"></td>
											<td>Caique Bueno</td>
											<td><img src="img/icones/admin/ok.png" width="20px"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
							<div class="row">
								<div class=" col-xs-offset-1 col-xs-10 caixinha_professor">
									<div class="col-xs-12"><h3>Não encontrou seu aluno?</h3></div>
									<div class="col-xs-12 text-left"><h3>Faça um convite:</h3></div>
									<div class="row">
										<div class="col-xs-3">Email do aluno: </div>
										<div class="col-xs-5"><input type="text" class="form-control" name="email_aluno"></div>
										<div class="col-xs-4"><input type="submit" class="btn botao_amarelo" name="enviar_convite">
										</div>
									</div>
								</div>
							</div>
							
								<div class="modal-footer cor_escura_rodape">
									<div class="col-xs-9">
							    		<input type="submit" name="criar_sala" value="Criar Sala" class="btn botao_amarelo">
							   	 	</div>
							     </div>
							</div>
							</div>
						</div>
					</div>
				</div>

					        <div class="col-lg-9">
					        	

						        <div>

									<h1 class="btn btn-warning btn-lg  btn-block"> Meus Dados Pessoais </h1>

									<br>

									<form>
										<div class="form-group col-xs-6">
										    <label for="nome"> Nome </label>
										    <input type="text" class="form-control" id="nome" placeholder="Tiago">
										</div>

										<div class="form-group col-xs-6">
										    <label for="sobrenome"> Sobrenome </label>
										    <input type="text" class="form-control" id="sobrenome" placeholder="Bala">
										</div>

										<div class="form-group col-xs-12">
										    <label for="email"> Email </label>
										    <input type="text" class="form-control" id="email" placeholder="mandabala@mandabrain.com">
										</div>

										<div class="form-group col-xs-12">
										    <label for="cpf"> CPF </label>
										    <input type="text" class="form-control" id="cpf" placeholder="420.832.998-05">
										</div>

										<div class="form-group col-xs-12">
										    <label for="sobrenome"> Data de Nascimento </label>
										    <input type="date" class="form-control" id="sobrenome" placeholder="28 / 11 / 1991">
										</div>

										<button type="submit" class="btn btn-info btn-md"> Atualizar Dados Pessoais </button>

									</form>

									<br>

									<h1 class="btn btn-warning btn-lg"> Senha </h1>

									<br>

									<form>
										<div class="form-group col-xs-6">
										    <label for="senha"> Senha atual </label>
										    <input type="password" class="form-control" id="senha" placeholder="°°°°°°°°">
										</div>

										<div class="form-group col-xs-6">
										    <label for="sobrenome"> Nova senha </label>
										    <input type="password" class="form-control" id="senha" placeholder="°°°°°°°°">
										</div>

										<button type="submit" class="btn btn-info btn-md"> Atualizar Senha </button>
									</form>

									<h1 class="btn btn-warning btn-lg"> Informações do Professor </h1>

									<br>

									<form>
										<div class="form-group col-xs-6">
										    <label for="grau"> Grau de escolaridade </label>
										    <select class="form-control" id="grau">
											  	<option> Ensino superior concluído </option>
											  	<option> Pós-graduação </option>
											  	<option> Outros </option>
											</select>
										</div>

										<div class="form-group col-xs-6">
										    <label for="universidade"> Universidade </label>
										    <input type="text" class="form-control" id="universidade">
										</div>

										<div class="form-group col-xs-12">
										    <label for="declaracao"> Declaração </label>
										    <input type="file" id="declaracao" value="Escolher Arquivo">
										</div>

										<br><br><br>

										<button type="submit" class="btn btn-info btn-md"> Enviar </button>
									</form>

						        </div>

					        </div>


					        <!-- /.col-lg-9 -->
		                </div>
		            </div>
		        </section>
			</div>
		</div>

		<?php
			include('rodape.php');
		?>

		<script src="js/jquery-3.2.1.min.js"></script>
        
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    
    <script src="js/jquery.easing.min.js"></script>
    
    <script src="js/scrolling-nav.js"></script>
	</body>
</html>