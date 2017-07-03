<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 13 - JQUERY -->

<html>
  <head>
    <title> Exercici 13 - Desaparece DIV lentamente</title>
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

    .divColorRed{
      background-color: red;
      border:1px solid black;
      text-align:center;
    }

    .divColorGreen{
      background-color: green;
      border:1px solid black;
      text-align:center;
    }
  </style>

	<body>
    <h2 style="text-align:center; font-family:monospace;">Exercici 13 - Desaparece DIV lentamente </h2>
    <div class="divColorRed" id="p1"> Color rojo </div><br/>
  </body>

  <script>
  //VAL per introduir, no text perquè text no tira amb textarea el valor
  $(document).ready(function(){
      $("#p1").click(function(){
          $(this).fadeOut(3000);
      });
  });

  </script>
</html>
