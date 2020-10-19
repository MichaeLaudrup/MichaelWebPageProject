<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Michael Laudrup WebSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/ResponsiveDesing.css">
	<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Playfair+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">

</head>
<body>
	  <!-- Cabecera de la pagina web -->
<?php require_once 'FragmentosPHP/navMenu.php';  ?>
<!-- Fragmento de texto -->
<!-- Este mensaje de bienvenida solo se muestra en pc, table... no movil-->
<div id="welcome-Box" >
	<img class="main-image " src="images/portfolio-main.jpg" alt="Visita a los pirineos franceses">
	<div class="home-Welcome-textBox d-none d-sm-block" >
		<pre id="home-welcome-text"><h3>Bienvenido al portfolio de Michael</h3>
En este espacio podrás conocerme mejor, aquí descrubiras cosas
increíbles que te permitirán apreciar que soy el candidato
perfecto para trabajar en <strong>tu compañia</strong>, es bien
sabido que la calidad exige tiempo, por ello, este espacio web
esta en fase de construcción. </pre>
   </div>

</div>
<!-- FIN Cabecera de la pagina web -->
<div class="container-fluid">
	<div class="row">
		<div id="DescripcionAcademia" class="col-12 description-box">
			<p class="descriptions">Cuando empezamos a explorar el mundo de desarrollo web, lo primero que se aprecia es que la cantidad de tecnologías existentes es abrumadora, el objetivo
			de academia, es poner un poco de orden, dandote información de alta calidad que te permita entender cuando debes usar unas u otras tenologías.</p>
			 <div id="deslizableSuperiorAcademia" class="col-12">
					<p class="row-titles">Academia</p>
			</div>
		</div>
	</div>

	<div id= "imagenFila1"class="row"  >
			<img src="images/fila2.jpg" alt="xd" style="width:100%;max-height:400px; ">
	</div>

	<!-- SECCION DE DESCROPCION DE WEB DESING CON DESLIZABLES -->
	<div class="row" >
		<div id="webDesing-description" class="col-12 description-box" >
		<p class="descriptions">En este espacio apreciaras como puedo ayudar a tu empresa descubriendo mi potencial creativo en el arte del diseño web, con un desarrollo full-stack (Front-end y Back-end)
		en modelos de negocio totalmente diversos.  </p>

	  <div id="full-slider" class="col-12">
			<div id="right-slider"class="sliding-half">
				<p  class="row-titles" >o web</p>
	    </div>
			<div id="left-slider"class="sliding-half" >
				<p class="row-titles" >Diseñ</p>
	    </div>
	  </div>
	</div>
  </div>

	<div class="row">
			<img src="images/fila3.jpg" alt="xd" style="width:100%;max-height:400px; ">
	</div>
  <div class="row" >
			<div id="DescripcionMelodias" class="col-12 description-box">
				 <p class="descriptions">Dicen que la música es el reflejo del alma, que mejor manera de mostrarse al mundo que mostrando tu música, en el rincón de melodías podrás escuchar ciertas composiciones musicales
				 que he realizado de manera informal y que tal vez puedan endulzar tus oídos.</p>
				 <div id="deslizableSuperiorMelodias" class="col-12">
	 					<p class="row-titles">Melodías</p>
	 			</div>
			</div>
  </div>
	</div>
	<?php require_once 'FragmentosPHP/footer.php';  ?>


<script src="js/jquery-3.5.1.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
