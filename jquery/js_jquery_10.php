<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 10 - JQUERY -->

<html>
  <head>
    <title> Exercici 10 - SPAN, TEXTAREA INPUT</title>
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
    <h2 style="text-align:center; font-family:monospace;">Exercici 10 - SPAN, TEXTAREA INPUT </h2>
    <p style="text-align:center"><strong> Pon texto en un text area, clica button y se pasarà al otro. Luego refresca para el otro (no tira sin refresh, palo > me) <strong></p><br/><br/>

      <textarea id="textEnviarDerecha" rows="4" cols="50"></textarea>
      <div id="aladerecha" class="button">Abajo </div><br/>

      <textarea id="textEnviarIzquierda" rows="4" cols="50"></textarea>
      <div id="alaizquierda" class="button">Arriba </div>

    <br/>

  </body>

  <script>
  //VAL per introduir, no text perquè text no tira amb textarea el valor
  $( "#aladerecha" ).click(function() {
      $('#textEnviarIzquierda').append($('#textEnviarDerecha').val());
  });

  $( "#alaizquierda" ).click(function() {
      $('#textEnviarDerecha').append($('#textEnviarIzquierda').val());
  });
  </script>
</html>
