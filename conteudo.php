<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <title>Conteúdos</title>
        
        <meta charset="utf-8"/>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen"/>
        
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>

        <link href="css/scrolling-nav.css" rel="stylesheet">

        <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>

        <style type="text/css">.navbar {
                background-color: #3c4759;
                border: none;
            }
        </style>
       
    </head>
    
	<body>
	
	

	<?php
	   include('cabecalho_logado.php');
	?>

    <div class="margem_top">
        <?php
            include('slide.php');
        ?>
    </div>
	
	<!-- Parte do cadastro!-->
	<div class="container-fluid cor_escura_rodape">
	  	<div class="row">
	  		<div class="col-xs-offset-3 col-xs-9">
	  			<h3>Cadastre-se para receber nossos e-books mensalmente</h3>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-offset-5 col-xs-3">
	  			<h4>Digite seu e-mail abaixo e cadastre-se</h4>
	  		</div>
	  	</div>
	  	<div class="row">
	        <div class="col-xs-12 espaco_rodape ">    
		            <div class="col-xs-offset-3 col-xs-6 ">
		            	<input class="form-control" placeholder="Digite aqui seu e-mail e cadastre-se"> 
		            </div>
		            <div class="col-xs-3">
		            	<button class="btn btn-warning botao_rodape" type="button" name="cadastrar">Cadastrar</button>
		            </div>
	    	</div>
	    </div>
	</div>
	<!-- Parte dos conteúdos!-->
	<div id="ebooks" class="ebooks_section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <h1> E-books </h1>

                        <br><br>

                        <div class="col-xs-4">
                            <div class="panel panel-success ebooks_section_color">
                                <div class="panel-heading">
                                    <img src="img/icones/ebooks/ebook1.png" width="250" width="224">
                                </div>
                                <div class="panel-body">
                                    <h2 class="text-center"> MandaProfissões </h2>
                                    <div class="text-justify">Já decidiu a carreira que vai seguir ou está confuso? O guia MandaProfissões tira todas as suas duvidas das diversas profissões, além de te ajudar a fazer as melhores escolhas!</div> 
                                    <br>
                                    <button class="btn btn-lg botao_amarelo"> Receba agora </button>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-xs-4">
                            <div class="panel panel-success ebooks_section_color">
                                <div class="panel-heading">
                                    <img src="img/icones/ebooks/ebook2.png" width="250" width="224">
                                </div>
                                <div class="panel-body">
                                    <h2 class="text-center"> MandaRedação </h2>
                                    <div class="text-justify">Sabe aquele tão sonhado 1000 na redação do Enem? Com o guia MandaRedação você pode realizar esse sonho. Ele conta com exemplos de redações, dicas e as estruturas mais adequadas seguindo um texto dissertativo-argumentativo.</div>
                                    <br>
                                    <button class="btn btn-lg botao_amarelo"> Receba agora </button>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-xs-4">
                            <div class="panel panel-success ebooks_section_color">
                                <div class="panel-heading ">
                                    <img src="img/icones/ebooks/ebook3.png" width="250" width="224">
                                </div>
                                <div class="panel-body ">
                                    <h2 class="text-center"> MandaVestibular </h2>
                                    <div class="text-justify">Está chegando a época de vestibulares e com o guia MandaVestibular você fica preparado para enfrentar todos os desafios na hora da prova, contando com dicas, técnicas e macetes.</div>
                                    <br>
                                    <button class="btn btn-lg botao_amarelo"> Receba agora </button>
                                </div>
                            </div>
                        </div>

                    </div>
                   
                </div>
            </div>
        </div>
	
    <script src="js/jquery-3.2.1.min.js"></script>
        
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    
    <script src="js/jquery.easing.min.js"></script>
    
    <script src="js/scrolling-nav.js"></script>
   
    
    
<?php
require('rodape.php');
?>
<script>
	$('.carousel').carousel({
		interval:500;	
	});
</script>
	</body>
</html>