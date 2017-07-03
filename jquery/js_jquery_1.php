<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 1 - JQUERY -->

<html>
  <head>
    <title> Exercici 1</title>
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
    <h2 style="text-align:center; font-family:monospace;">Exercici 1 - Ocultar DIV</h2>
    <a onclick="esconderDIV();" class="button">Esconder DIV</a><br/><br/>

      <div id="ocultame" style="border: 1px solid black; background-color:red; font-weight: 800; text-align:center;">
        Esto se ocultara al clicar sobre el enlace posterior

      </div>

  </body>

  <script>
      function esconderDIV(){
          document.getElementById('ocultame').style.display = "none";
      }
  </script>
</html>
