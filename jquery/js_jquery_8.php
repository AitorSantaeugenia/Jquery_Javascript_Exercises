<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 8 - JQUERY -->

<html>
  <head>
    <title> Exercici 8 - Formulario</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>

  <style>
    .button{
      display: block;
      width: 115px;
      height: 25px;
      background: #4E9CAF;
      padding: 10px;
      text-align: center;
      border-radius: 5px;
      color: white;
      font-weight: bold;
    }

    .linkoculto{
      font-family:monospace;
      text-align:center;
      border:1px solid black;
    }
  </style>

	<body>
    <h2 style="text-align:center; font-family:monospace;">Exercici 8 - Formulario </h2>

    <form name="myForm" id="myFormEnviar" action="#" method="post">
      Nombre: <input type="text" name="name"><br/>
      Apellido: <input type="text" name="lastname">
    </form>
    <a id="botonEnviar" class="button"> Enviar </a>
    <br/>
  </body>

  <script>
    $( "#botonEnviar" ).click(function() {
        $( "#myFormEnviar" ).submit();
    });
  </script>

  <!-- PARA VER SI SE ENVIA O NO POR $_POST -->
  <?php
      print_r($_POST);
   ?>
</html>
