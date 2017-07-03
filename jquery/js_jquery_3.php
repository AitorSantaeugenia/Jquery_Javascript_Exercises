<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 3 - JQUERY -->

<html>
  <head>
    <title> Exercici 3 - EJ1 Con Jquery</title>
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
    <h2 style="text-align:center; font-family:monospace;">Exercici 3 - Ocultar A JQUERY</h2>

    <a class="linkoculto">Esto se escondera al hacer click al botón</a><br/>
    <a class="linkoculto">Esto se escondera al hacer click al botón</a><br/>
    <a class="linkoculto">Esto se escondera al hacer click al botón</a><br/>
    <a class="linkoculto">Esto se escondera al hacer click al botón</a><br/><br/>

    <span onclick="esconderAs();" class="button"> Click me </span>

  </body>

  <script>
    function esconderAs() {
        var x = document.getElementsByClassName("linkoculto");

        for (var i = 0; i < x.length; i++){
            x[i].style.display = "none";
        }
    }
  </script>
</html>
