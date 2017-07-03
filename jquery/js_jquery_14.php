<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 14 - JQUERY -->

<html>
  <head>
    <title> Exercici 14 - SLIDEDOWN SLIDEUP</title>
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
      border:1px solid black;
      text-align:center;
    }
  </style>

	<body>
    <h2 style="text-align:center; font-family:monospace;">Exercici 14 - SLIDEDOWN SLIDEUP </h2>
    <div class="divColorRed" id="p1"> Color rojo </div><br/>
    <div class="divColorGreen" id="p2"> Clica para desplegar </div><br/>
  </body>

  <script>
  //HAGO SLIDE DOWN Y SLIDE UP PORQUÉ SINÓ NO HACE NAH
  $(document).ready(function(){
      $("#p2").click(function(){
          $("#p1").slideUp("slow");
      });
  });

  $(document).ready(function(){
      $("#p2").click(function(){
          $("#p1").slideDown("slow");
      });
  });

  </script>
</html>
