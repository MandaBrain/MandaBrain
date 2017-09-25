<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <title>Descontos</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen"/>
        
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>

        <link href="css/scrolling-nav.css" rel="stylesheet">

        <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>

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

	<section id="formulario" class="formulario_section img-responsive">	
		<div class="container-fluid ">
		<!-- Título de desconto !-->
			<div class="row">
				<div class="col-xs-offset-7 col-xs-5">
					<h2 class="letra_branca">Encontre sua bolsa de desconto</h2>
				</div>
			</div>
			
		<!-- Formulário !-->

			<div class="row">
				<div class="col-xs-offset-6 col-xs-6">

					<div class="form-group">
						<div class="col-xs-12 margem_top">
							<!-- Botão localização -->
							 	<select class="form-control" placeholder="Localização">
							 		<option>Escolha seu curso de interesse</option>
							 		<option>Sla</option>
							 		<option>Sla</option>
							 		<option>Sla</option>
							 	</select>
						</div>
					</div>
					
					<div class="form-group radio text-center centro_radio">
						<div class="col-xs-6 margem_top rigth_radio">
							<input type="radio" class="" id="graduacao" name="formacao" value="1" checked="">
							<label for="graduacao">Graduação</label>
						</div>
									
						<div class="col-xs-6 margem_top meio_radio">
							<input type="radio" name="formacao" id="pos" value="2">
							<label for="pos">Pós-Graduação</label>
						</div>
					</div>
					
					<div class="form-group radio text-center centro_radio">
						<div class="col-xs-6 margem_top">
							<input type="radio" name="local" id="Presencial" value="1" checked="">
							<label for="Presencial">Presencial</label>
						</div>
									
						<div class="col-xs-6 margem_top meio_radio">
							<input type="radio" id="distancia" name="local" value="3"/>
							<label for="distancia">À Distância</label>
						</div>
					</div>

					
					
					<div class="form-group">
						<div class="col-xs-12 margem_top">
							<!-- Botão localização -->
							 	<select class="form-control">
							 		<option>Localidade</option>
							 		<option>Sla</option>
							 		<option>Sla</option>
							 		<option>Sla</option>
							 	</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-12 margem_top">
							<!-- Botão buscar -->
							 	<input type="submit" class="btn btn-warning botao_buscar_desconto" name="buscar" value="Buscar bolsa"/>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

	  <!-- E-books Section -->
        <section id="ebooks" class="ebooks_section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <h1> Bolsas </h1>

                        <br><br>

                        <div class="col-xs-4">
                            <div class="panel panel-success ebooks_section_color">
                                <div class="panel-heading branco">
                                    <img src="img/faculdades/anhembi.jpg" width="250" height="243">
                                </div>
                                <div class="panel-body">
                                   A bolsa de 60% no curso de <b>Engenharia Química</b> é perfeita para você
                                    <br>
                                    <a href="detalhes_engenharia.php"><button class="btn btn-lg botao_amarelo"> Veja já </button></a>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-xs-4">
                            <div class="panel panel-success ebooks_section_color">
                                <div class="panel-heading">
                                    <img src="img/faculdades/fam.jpg" width="250" height="243">
                                </div>
                                <div class="panel-body">
                                   A bolsa de 60% no curso de <b>Administração</b> é perfeita para você!
                                    <br>
                                    <a href="detalhes_administracao.php"><button class="btn btn-lg botao_amarelo"> Veja já </button></a>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-xs-4">
                            <div class="panel panel-success ebooks_section_color">
                                <div class="panel-heading ">
                                    <img src="img/faculdades/uninove.jpg" width="250" height="243">
                                </div>
                                <div class="panel-body ">
                                    A bolsa de 60% no curso de <b>Economia</b> é perfeita para você!
                                    <br>
                                    <a href="detalhes_ciencias_economicas.php"><button class="btn btn-lg botao_amarelo espaco_rodape"> Veja já </button></a>
                                </div>
                            </div>
                        </div>

                    </div>
                   
                </div>
            </div>
        </section>

	
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
   
        <!-- Scrolling Nav JavaScript -->
    
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    
    <script type="text/javascript" src="js/scrolling-nav.js"></script>
    
<?php
require('rodape.php');
?>
	</body>
</html>