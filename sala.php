<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/sala_h.css">

		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		
		<link rel="stylesheet" type="text/css" href="css/scrolling-nav.css">
		
		<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>
		
		<!--Scroll-->
		<script type="text/javascript">
		$(function(){
  			$('.scroll').perfectScrollbar();
		});
		</script>

		<script src="js/jquery_aja.js"></script>

		<script src="js/perfect-scrollbar.min.js"></script>

		<link rel='stylesheet' href="css/perfect-scrollbar.css">
		
		<title> Sala</title>
		
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		
		
		<script>
			function n(){
				$("#ap").css('display', 'block');
				$("#tp").css('display', 'block');
				$("#n").css('display', 'block');
			}
		</script>
		<style>	
		.navbar{
			background: #3c4759;
			border: none;
		}
		</style>
		
		

		<!-- Custom Theme files -->
		<link href="css/style_calendario.css" rel='stylesheet' type='text/css' />

		<!-- Custom Theme files -->

		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<script type="application/x-javascript">
		 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
		 function hideURLbar(){ window.scrollTo(0,1); } 
		 </script>

		<script src="js/jquery-1.11.1.min.js"></script>

		<script src="js/jQuery-plugin-progressbar.js"></script>

		<!--<link href='//fonts.googleapis.com/css?family=Maven+Pro:700,400' rel='stylesheet' type='text/css'>
		<!--//theme-style-->
		 <!--Calender-->
		 <link rel="stylesheet" href="css/clndr.css" type="text/css" />

		 <script src="js/underscore-min.js"></script>
		 
		 <script src= "js/moment-2.2.1.js"></script>
		 
		 <script src="js/clndr.js"></script>
		 
		 <script src="js/site.js"></script>
		<!--End Calender-->
			
			<!---Google Analytics Designmaz.net-->
			<!--<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');
		  </script>-->
		
		
		
	</head>
	<body>
	<?php 
	include('cabecalho_logado.php');
	?>
	
	
		<div id="tudo" class="espaco_cabecalho">
			<div id="esquerdo" > 
				<div id="nome_sala" ><p class="text-center">Classrom T.I</p></div>
				<div id="nome_sala_membros"><p class="text-center">Membros</p></div>
				<div id="mostrar"><p>
						<div class="scroll">
							<ul id="lista_participantes">
								<li class="iten_part"><img src="img/de.png" width="40px">&nbsp;&nbsp;Jean Lucas</li>
								<li class="iten_part"><img src="img/de.png" width="40px">&nbsp;&nbsp;Isabella Nicolete</li>
								<li class="iten_part"><img src="img/de.png" width="40px">&nbsp;&nbsp;Gustavo Silva</li>
								<li class="iten_part"><img src="img/de.png" width="40px">&nbsp;&nbsp;Marcos Lindão</li>
								<li class="iten_part"><img src="img/de.png" width="40px">&nbsp;&nbsp;Bruno Papai</li>
								<li class="iten_part"><img src="img/de.png" width="40px">&nbsp;&nbsp;Qualquer nome</li>
								<li class="iten_part"><img src="img/de.png" width="40px">&nbsp;&nbsp;Outro nome</li>
								<li class="iten_part"><img src="img/de.png" width="40px">&nbsp;&nbsp;Nome do membro</li>
								
							</ul>
						</div>
						 <p><a class="btn btn-lg btn-primary" href="#" role="button" id="adc_membro">Adicionar Membro</a></p>
						 <p><a class="btn btn-lg btn-primary" href="#" role="button" id="adc_membro_e">Excluir Membro</a></p>
				</p></div>
			</div>
			<!-- fim da parte esquerda e começo da parte de cima direita -->
			<div id="direito_cima" class="col-lg-3">
				<div id="titulo_direita_topo"><h1>Arquivos Enviados</h1></div>
				<div id="titulo_direita_topo_pagina">Sala do Thiago</div>
				<div class="scroll_direita">
							<ul id="lista_participantes_direita">
								<li class="iten_part_direito_cima"><img src="img/arquivo.png" width="40px">&nbsp;&nbsp;Trabalho de HTML</li>
								<li class="iten_part_direito_cima"><img src="img/arquivo.png" width="40px">&nbsp;&nbsp;Trabalho de CSS</li>
								<li class="iten_part_direito_cima"><img src="img/arquivo.png" width="40px">&nbsp;&nbsp;Trabalho de PW</li>
								<li class="iten_part_direito_cima"><img src="img/arquivo.png" width="40px">&nbsp;&nbsp;Trabalho de PAW</li>
								<li class="iten_part_direito_cima"><img src="img/arquivo.png" width="40px">&nbsp;&nbsp;Trabalho de CMS</li>
								<li class="iten_part_direito_cima"><img src="img/arquivo.png" width="40px">&nbsp;&nbsp;Trabalho de Marketing</li>
								<li class="iten_part_direito_cima"><img src="img/arquivo.png" width="40px">&nbsp;&nbsp;Trabalho de AP</li>
								<li class="iten_part_direito_cima"><img src="img/arquivo.png" width="40px">&nbsp;&nbsp;Trabalho de Design</li>			
							</ul>
				</div>
			</div>
			<!-- fim da parte de cima direita e começo da parte de baixo direita -->
			<div id="direito_baixo">
				<div id="titulo_direita_topo_baixo"><h1>Adicione uma nova Atividade</h1></div>
					
					
					
					
					
					
			<!-- Abre o CAlendarioooooooooooooooooooooooooooooooooooooo -->					
					
					
					
					
		<div id="" class="main"> <!--   hvr-float-shadow -->
		    <div class="slide" >
			 	<div id="dd1" class="wrapper-dropdown-3" tabindex="1"><span><img src="img/nav.png" alt=""/></span>
										<ul class="dropdown">
										
												
												<li><a href="#">Eventos</a></li>
												<li><a href="#">Taréfas</a></li>
												<li><a href="#">Minhas anotações</a></li>
												<li><a href="#">Mostrar tudo</a></li>
										</ul>
				<script type="text/javascript">
							function DropDown(el) {
									this.dd = el;
									this.initEvents();
									}
									DropDown.prototype = {
										initEvents : function() {
											var obj = this;
													obj.dd.on('click', function(event){
													$(this).toggleClass('active');
													event.stopPropagation();
													});	
												}
											}
											$(function() {
										
											var dd = new DropDown( $('#dd1') );
										
										$(document).click(function() {
											// all dropdowns
										$('.wrapper-dropdown-3').removeClass('active');
														});
										
													});
									</script>
								
								</div>

					<!--Slide-->			
			      <div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>
								<div class="banner-info">
								   <h3>Eventos</h3>
								    <p>18 Abril</p>
									<img src="img/1.jpg" alt=""/>
								</div>
							</li>
							<li>
								<div class="banner-info">
								   <h3>Eventos</h3>
									<p>16 Abril</p>
									<img src="img/2.jpg" alt=""/>
								</div>
							</li>
							<li>
								<div class="banner-info">
								   <h3>Eventos</h3>
								    <p>25 dezembro</p>
									<img src="img/1.jpg" alt=""/>
								</div>
							</li>
						</ul>
					</div>
					<!--Final Slide-->

						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 
						 <script>
						// You can also use "$(window).load(function() {"
						
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>

						 <div class="clear"></div>
						<ul class=" side-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
					   </ul>

					</div>
					 <div class="mini-cal">
			<div class="calender">
					<div class="column_right_grid ">
                      <div class="cal1 ">
                      	<div class="clndr ">
                      		<div class="clndr-controls ">
                      			<div class="clndr-control-button">
                      				<p class="clndr-previous-button">previous</p>
                      			</div>
                      			<div class="month">September 2015</div>
                      			<div class="clndr-control-button rightalign">
                      				<p class="clndr-next-button">next</p>
                      			</div>
                      		</div>
                      		<table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                      			<thead>
                      				<tr class="header-days">
                      					<td class="header-day">S</td>
                      					<td class="header-day">M</td>
                      					<td class="header-day">T</td>
                      					<td class="header-day">W</td>
                      					<td class="header-day">T</td>
                      					<td class="header-day">F</td>
                      					<td class="header-day">S</td>
                      				</tr>
                      			</thead>
                      			<tbody>
                      				<tr>
                      					<td class="day past adjacent-month last-month calendar-day-2015-08-30">
                      						<div class="day-contents">30</div>
                      					</td>
                      					<td class="day past adjacent-month last-month calendar-day-2015-08-31">
                      						<div class="day-contents">31</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-01">
                      						<div class="day-contents">1</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-02">
                      						<div class="day-contents">2</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-03">
                      						<div class="day-contents">3</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-04">
                      						<div class="day-contents">4</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-05">
                      						<div class="day-contents">5</div>
                      					</td>
                      				</tr>
                      				<tr>
                      					<td class="day past calendar-day-2015-09-06">
                      						<div class="day-contents">6</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-07">
                      						<div class="day-contents">7</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-08">
                      						<div class="day-contents">8</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-09">
                      						<div class="day-contents">9</div>
                      					</td>
                      					<td class="day past event calendar-day-2015-09-10">
                      						<div class="day-contents">10</div>
                      					</td>
                      					<td class="day past event calendar-day-2015-09-11">
                      						<div class="day-contents">11</div>
                      					</td>
                      					<td class="day past event calendar-day-2015-09-12">
                      						<div class="day-contents">12</div>
                      					</td>
                      				</tr>
                      				<tr>
                      					<td class="day past event calendar-day-2015-09-13">
                      						<div class="day-contents">13</div>
                      					</td>
                      					<td class="day past event calendar-day-2015-09-14">
                      						<div class="day-contents">14</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-15">
                      						<div class="day-contents">15</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-16">
                      						<div class="day-contents">16</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-17">
                      						<div class="day-contents">17</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-18">
                      						<div class="day-contents">18</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-19">
                      						<div class="day-contents">19</div>
                      					</td>
                      				</tr>
                      				<tr>
                      					<td class="day past calendar-day-2015-09-20">
                      						<div class="day-contents">20</div>
                      					</td>
                      					<td class="day past event calendar-day-2015-09-21">
                      						<div class="day-contents">21</div>
                      					</td>
                      					<td class="day past event calendar-day-2015-09-22">
                      						<div class="day-contents">22</div>
                      					</td>
                      					<td class="day past event calendar-day-2015-09-23">
                      						<div class="day-contents">23</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-24">
                      						<div class="day-contents">24</div>
                      					</td>
                      					<td class="day past calendar-day-2015-09-25">
                      						<div class="day-contents">25</div>
                      					</td>
                      					<td class="day today calendar-day-2015-09-26">
                      						<div class="day-contents">26</div>
                      					</td>
                      				</tr>
                      				<tr>
                      					<td class="day calendar-day-2015-09-27">
                      						<div class="day-contents">27</div>
                      					</td>
                      					<td class="day calendar-day-2015-09-28">
                      						<div class="day-contents">28</div>
                      					</td>
                      					<td class="day calendar-day-2015-09-29">
                      						<div class="day-contents">29</div>
                      					</td><td class="day calendar-day-2015-09-30">
                      					<div class="day-contents">30</div>
                      				</td>
                      				<td class="day adjacent-month next-month calendar-day-2015-10-01">
                      					<div class="day-contents">1</div>
                      				</td>
                      				<td class="day adjacent-month next-month calendar-day-2015-10-02">
                      					<div class="day-contents">2</div>
                      				</td>
                      				<td class="day adjacent-month next-month calendar-day-2015-10-03">
                      					<div class="day-contents">3</div>
                      				</td>
                      			</tr>
                      		</tbody>
                      	</table>
                      </div>
                  </div>
				    </div>
					<div class="cal-pos a">
						<ul>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="cal-pos">
						<ul>
							<li></li>
							<li></li>
						</ul>
					</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<p style="color: #F4CE51;text-align: center;font-size: 20px;">&nbsp;</p>
	
					
			<!-- Final do CAlendarioooooooooooooooooooooooooooooooooooooo -->			

					
					
				</div>
			</div>
<?php 
	include('rodape.php');	
?>
	 <!-- Scrolling Nav JavaScript -->
    
    <script src="js/jquery.easing.min.js"></script>
    
    <script src="js/scrolling-nav.js"></script>

    
    <!-- jQuery (necessary JavaScript plugins) -->
	
	<script src="js/bootstrap.js"></script>

	</body>
</html>