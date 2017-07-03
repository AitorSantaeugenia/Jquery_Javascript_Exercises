<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 11 - JQUERY -->

<html>
  <head>
    <title> Exercici 11 - P Ocultas</title>
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

    .aOcultar, .testing{
      border:1px solid black;
    }

    .aOcultar{
      border:1px solid black;
      background-color: green;
    }

    .testing{
      border:1px solid black;
      background-color: red;
    }
  </style>

	<body>
    <h2 style="text-align:center; font-family:monospace;">Exercici 11 - P Ocultas </h2>
    <p style="text-align:center">Si clicamos los que tienen clase <strong> aOcultar </strong> escondera los 4 primeros DIV, sinó escondera los DIV con clase <strong>testing</strong></p><br/><br/>

    <p style="text-align:center" class="aOcultar"><strong> Estos tienen la clase aOcultar </strong></p><br/><br/>
    <p style="text-align:center" class="aOcultar"><strong> Estos tienen la clase aOcultar </strong></p><br/><br/>
    <p style="text-align:center" class="aOcultar"><strong> Estos tienen la clase aOcultar </strong></p><br/><br/>
    <p style="text-align:center" class="aOcultar"><strong> Estos tienen la clase aOcultar </strong></p><br/><br/>
    <p style="text-align:center" class="testing"> Estos <strong>NO</strong> tienen la clase aOcultar, tienen testing </p><br/><br/>
    <p style="text-align:center" class="testing"> Estos <strong>NO</strong> tienen la clase aOcultar, tienen testing</p><br/><br/>
  </body>

  <script>
  //VAL per introduir, no text perquè text no tira amb textarea el valor
  $(document).ready(function(){
       $('p.aOcultar').click(function(){
            $('.aOcultar').hide()
        });

       $('p.testing').click(function(){
          $('.testing').hide()
       });
  });

  </script>
</html>
