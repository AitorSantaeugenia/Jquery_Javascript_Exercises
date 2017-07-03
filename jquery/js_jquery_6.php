<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 6 - JQUERY -->

<html>
  <head>
    <title> Exercici 6 - Tipo de letra</title>
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
    <h2 style="text-align:center; font-family:monospace;">Exercici 6 - Tipo de letra </h2>

    <div id="esconderDIV">This is a DIV</div><br/>

    <span class="button" id="buttonClick"> Click me </span>

  </body>

  <script>
      //CAMBIAMOS tipo de letra y negrita
      $( "#buttonClick" ).hover(function() {
        var p = $("#esconderDIV").css("font-family", "monospace");
        var t = $("#esconderDIV").css("font-weight", "800");
      });
  </script>
</html>
