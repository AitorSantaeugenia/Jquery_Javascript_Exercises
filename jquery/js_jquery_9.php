<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 9 - JQUERY -->

<html>
  <head>
    <title> Exercici 9 - SPAN, TEXTAREA INPUT</title>
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
    <h2 style="text-align:center; font-family:monospace;">Exercici 9 - SPAN, TEXTAREA INPUT </h2>
    <p style="text-align:center"><strong> Pon texto en el input text y al cliar en el boton se meterá en el textarea <strong></p><br/><br/>

      Texto: <input type="text" name="textarea" id="inputTextEnviar"><br/><br/>
      <textarea id="textareaEnviar" rows="4" cols="50" disabled></textarea><br/><br/>

    <span id="botonEnviar" class="button"> Enviar </span>
    <br/>

  </body>

  <script>
  //VAL per introduir, no text perquè text no tira amb textarea el valor
  $( "#botonEnviar" ).click(function() {
      $('#textareaEnviar').append($('#inputTextEnviar').val());
  });
  </script>
</html>
