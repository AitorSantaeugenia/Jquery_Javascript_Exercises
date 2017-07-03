<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 7 - JQUERY -->

<html>
  <head>
    <title> Exercici 7 - Cambiar tipo letra</title>
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
    <h2 style="text-align:center; font-family:monospace;">Exercici 7 - Cambiar tipo letra </h2>
    Escribe E o S: <input type="text" name="letra" maxlength="20" id="clickme"><br><br/>

  </body>

  <script>
    $('#clickme').keyup(function(){
        //Solo letras, sin validacion
        var node = $(this);
        //El primero así o no escribirá más, reemplazará los primeros valores
        node.val(node.val().replace(/[s]/g,'$'));
        node.val(node.val().replace(/[e]/g, String.fromCharCode(8364)));
        //alert(node.value);
      });
  </script>
</html>
