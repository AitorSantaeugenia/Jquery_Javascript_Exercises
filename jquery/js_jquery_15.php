<!DOCTYPE html5>

<!-- AITOR JAVIER SANTAEUGENIA MARÍ
EXERCICI 15 - JQUERY -->

<html>
  <head>
    <title> Exercici 15 - Mover DIV y otras cosas</title>
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

    .button:hover{

      background-color: grey;
    }

    .divColorRed{
      background:red;
      height:100px;
      width:100px;
      position:absolute;
      text-align:center;
    }

    .divColorGreen{
      border:1px solid black;
      text-align:center;
    }
  </style>

	<body>
    <h2 style="text-align:center; font-family:monospace;">Exercici 15 - Mover DIV y otras cosas </h2>
    <div class="divColorRed" id="p1"> Color rojo </div><br/><br/><br/><br/><br/><br/><br/>
    <div class="button" id="p2"> Clica</div><br/>
  </body>

  <script>
  //HAGO SLIDE DOWN Y SLIDE UP PORQUÉ SINÓ NO HACE NAH
  $(document).ready(function(){
      $("#p2").click(function(){
          $("#p1").animate({
            left: '250px',
            opacity: '0.5',
            height: '150px',
            width: '150px'
          });
      });
  });

  </script>
</html>
