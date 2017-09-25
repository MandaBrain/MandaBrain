<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Detalhes Curso</title>

		<meta charset="utf-8"/>
	        
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen"/>
	        
	    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>

	    <link href="css/scrolling-nav.css" rel="stylesheet">

	    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>

	    <style type="text/css">
		#map-container { 
			width: 100%;
		}
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
		<div class="container-fluid  espaco_cabecalho">
			<div class="row text-center">
				<h1>Imagem</h1>
			</div>

			<div class="row text-center">
				<div class="form-group">
					<h1>Nome do curso</h1>
				</div>
				<div class="form-group">
					<h1>Detalhes do curso</h1>
				</div>
			</div>

			<div class="row text-center ">
				<div class="col-xs-12 fundo_rosa_detalhes_curso">
					<div class="form-group ">
						<h1 class="letra_branca"></h1>
					</div>

					 <div class="col-xs-4 col-xs-offset-1">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                	<h3>Valor sem MandaBrain</h3>
                                    <img src="img/icones/ebooks/dinheiro.png" width="250" width="224">
                                </div>
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed fermentum lacus, et sodales leo. Aliquam egestas quam eget odio gravida malesuada.
                                    <br>
                                </div>
                            </div>
                        </div>

                         <div class="col-xs-4 col-xs-offset-2">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                <h3>Valor com MandaBrain</h3>
                                    <img src="img/icones/ebooks/dinheiro.png" width="250" width="224">
                                </div>
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed fermentum lacus, et sodales leo. Aliquam egestas quam eget odio gravida malesuada.
                                    <br>
                                </div>
                            </div>
                        </div>

					<div class="form-group">
						<div class="col-xs-8 col-xs-offset-2 espaco_bot">
							<!-- Botão buscar -->
							 	<input type="submit" class="btn btn-lg btn-warning botao_buscar_desconto" name="buscar" value="Garanta já sua bolsa"/>
						</div>
					</div>
				</div>
			</div>

			<div class="row text-center letra_branca">
				<div class="col-xs-12 fundo_azul_detalhes_curso  bordas">
						<?php
							include('api_maps.php');
						?>
				</div>
			</div>
		</div>
	<script src="js/jquery-3.2.1.min.js"></script>
        
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    
    <script src="js/jquery.easing.min.js"></script>
    
    <script src="js/scrolling-nav.js"></script>
	<?php
		include('rodape.php');
	?>
	</body>
</html>