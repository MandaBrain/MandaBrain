<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">

		<title> Home </title>

		<link rel="stylesheet" type="text/css" href="css/home.css">

		<link rel="stylesheet" type="text/css" href="css/sala_h.css">

        <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->

        <link href="css/scrolling-nav.css" rel="stylesheet">

        <link href="css/estilo.css" rel="stylesheet">

        <style type="text/css">
            .navbar {
                background-color: #3c4759;
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
		                    <div class="col-xs-3 borda">

		                        <img src="img/padrao.png" width="240" height="240" class="img_usu img-circle">

		                        <h2 class="text-center nome_usu"> Guilherme </h2>

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

								
		                    </div>

					        <div class="col-lg-9">

						        <div>

									<h1 class="btn btn-warning btn-lg  btn-block"> Meus Dados Pessoais </h1>

									<br>

									<form>
										<div class="form-group col-xs-6">
										    <label for="nome"> Nome </label>
										    <input type="text" class="form-control" id="nome" placeholder="Guilherme">
										</div>

										<div class="form-group col-xs-6">
										    <label for="sobrenome"> Sobrenome </label>
										    <input type="text" class="form-control" id="sobrenome" placeholder="Vila Nova">
										</div>

										<div class="form-group col-xs-12">
										    <label for="email"> Email </label>
										    <input type="text" class="form-control" id="email" placeholder="guihvila@mandabrain.com">
										</div>

										<div class="form-group col-xs-12">
										    <label for="cpf"> CPF </label>
										    <input type="text" class="form-control" id="cpf" placeholder="490.892.998-07">
										</div>

										<div class="form-group col-xs-12">
										    <label for="sobrenome"> Data de Nascimento </label>
										    <input type="date" class="form-control" id="sobrenome" placeholder="28 / 11 / 2000">
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