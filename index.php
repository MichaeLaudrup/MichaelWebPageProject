<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Michael Laudrup WebSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Playfair+Display&display=swap" rel="stylesheet">

</head>
<body>
	  <!-- Cabecera de la pagina web -->
<?php require_once 'FragmentosPHP/navMenu.php';  ?>
<!-- Fragmento de texto -->
<!-- Este mensaje de bienvenida solo se muestra en pc, table... no movil-->
<div id="welcome-Box" class="d-none d-sm-block"  >
	<img class="main-image " src="images/pirineoFrances.jpg" alt="Visita a los pirineos franceses">
	<div class="home-Welcome-textBox" >
		<pre id="home-welcome-text"><h3>Welcome to Michael's Portfolio</h3>
On this space you can know me better, here you will discover
incredible things that will allow you to appreciate that I am
a good candidate to work in <strong>your company </strong>....</pre>
   </div>
	 <span id="pieFoto">Cirque de Gavarnie(Francia)</span>
</div>
<!-- FIN Cabecera de la pagina web -->
<div id="filaInterna" >
	 <p id="text-filaInterna">Descubre tu potencial creativo adentrandote en el mundo de la tecnología, en este rincón podrás obtener información
	 de diversas áreas de conocimiento de la tecnología, seleccionando contenidos de alto contenido de la World Wide Web para que aprendas mucho más
   rápido.  </p>
     <div class="deslizable">
			 <p>Academia</p>
     </div>
</div>

<script src="js/jquery-3.5.1.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>