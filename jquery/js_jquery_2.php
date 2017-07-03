<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 2 - JQUERY -->

<html>
  <head>
    <title> Exercici 2 - EJ1 Con Jquery</title>
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
  </style>

	<body>
    <h2 style="text-align:center; font-family:monospace;">Exercici 2 - Ocultar DIV JQUERY</h2>
    <a class="button" id="clickme">Esconder DIV</a><br/><br/>

      <div id="ocultame" style="border: 1px solid black; background-color:red; font-weight: 800; text-align:center;">
        Esto se ocultara al clicar sobre el enlace posterior

      </div>

  </body>

  <script>
      $( "#clickme" ).click(function() {
        $( "#ocultame" ).hide( "slow", function() {
          alert( "Acción finalizada" );
      });
      });
  </script>
</html>
