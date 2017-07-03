<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 4 - JQUERY -->

<html>
  <head>
    <title> Exercici 4 - EJ1 Con Jquery</title>
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
    <h2 style="text-align:center; font-family:monospace;">Exercici 4 - Ocultar A JQUERY</h2>

    <a class="linkoculto">Esto se escondera al hacer click al botón</a><br/>
    <a class="linkoculto">Esto se escondera al hacer click al botón</a><br/>
    <a class="linkoculto">Esto se escondera al hacer click al botón</a><br/>
    <a class="linkoculto">Esto se escondera al hacer click al botón</a><br/><br/>

    <span onclick="esconderAs();" class="button" id="buttonClick"> Click me </span>

  </body>

  <script>
  //El 600 dentro del hide hace slow
        $("#buttonClick").click(function(){
            $(".linkoculto").hide(600);
        });
  </script>
</html>
