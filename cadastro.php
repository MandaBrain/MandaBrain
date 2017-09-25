<!doctype html>
<html lang="pt-br" class="no-js">
    <head>
          <meta charset="UTF-8" />
          <title> Cadastro </title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style_cadastro.css" />

          <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

          <!-- jQuery optional -->
          <script type='text/javascript' src='js/jquery-3.2.1.js'></script>

          <script type='text/javascript' src='js/jquery.particleground.js'></script>
          <script type='text/javascript' src='js/demo.js'></script>
    </head>

    <body>

    <style type="text/css">
      .navbar{
        border: none;
      }
    </style>

    <div id="particles">
        <div id="intro">
            <h1> Cadastre-se </h1>

            <form action="index.php" method="POST" name="login">

                <div class="alinha">

                  <label> Nome: </label>
                  <input type="text" name="email" required class="form-control">

                </div>

                <br>

                <div class="alinha">

                  <label> Sobrenome: </label>
                  <input type="text" name="senha" required class="form-control">

                </div>

                <br>

                <div class="alinha">

                  <label> Email: </label>
                  <input type="email" name="senha" required class="form-control">

                </div>

                <br>

                <div class="alinha">

                  <label> Senha: </label>
                  <input type="password" name="senha" required class="form-control">

                </div>

                <br>

                <div class="alinha">

                  <label> Confirmar Senha: </label>
                  <input type="password" name="senha" required class="form-control">

                </div>

                <br><br>

                <input type="submit" name="enviar" value="Cadastrar" class="btn">

            </form>     
            
            <br>

        </div>
    </div>

    </body>
</html>
