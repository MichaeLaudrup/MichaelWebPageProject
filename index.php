<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Michael Laudrup WebSite</title>
	<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Playfair+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <?php 
        $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 'mainPage'; 
        if($paginaActual === 'webdesingzone'){
            echo '<style>' . file_get_contents('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css') . '</style>'; 
            echo '<style>' . file_get_contents('css/webDesing_style.css') . '</style>'; 
        }else if($paginaActual === 'academyzone'){
            echo '<style>' . file_get_contents('css/academy_style.css') . '</style>';
        }else if($paginaActual === 'cvitaezone'){
            echo '<style>' . file_get_contents('css/cVitae_style.css') . '</style>';
        }else{
            echo '<style>' . file_get_contents('css/mainPage_style.css') . '</style>';
        }
    ?>
</head>

<body>
	  <!-- Cabecera de la pagina web -->
    <header id="cabecera">
        <!-- Area de navegacion -->
        <nav id="menuNavegacion" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <!-- Marca de la web -->
            <a id="brand-title" class="navbar-brand " href="index.php">Michael's PortFolio</a>
            <!-- Boton de menu desplegable en formato movil -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul id="lista" class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=academyzone" >Academia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=webdesingzone">Diseño Web</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >Melodías</a>
                </li>
                <li class="nav-item">
                    <a target="_blank" class="nav-link" href="index.php?pagina=cvitaezone">MiCV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mailto:maikelaudrupluisgonzalez@gmail.com?Subject=Solicitud%20de%20información" >Contacto</a>
                </li>
            </ul>
        </div>
        </nav>
    </header>
    <!-- Fin cabecera de pagina web -->
    <?php 
        $pagina = isset($_GET['pagina']) ? strtolower($_GET['pagina']) : 'mainPage'; 
        require_once 'FragmentosPHP/' . $pagina .'.php' ; 
    ?>
  <!-- Pie de pagina web -->
    <footer>
    <!-- Footer Elements -->
        <div class="container-fluid" >
        <!-- Grid row-->
            <div class="row">
                <div id="contenedor-iconos" class="col-12" >
                    <a class="area-link" href="https://www.instagram.com/maikel.laudrup/"><img class="iconos" src="icons/insta_ico.svg" alt="instagram"></a>
                    <a class="area-link" href="https://www.linkedin.com/in/michael-laudrup"><img class="iconos" src="icons/linkedin_ico.svg" alt="linkedin"></a>
                    <a class="area-link" href="https://github.com/MichaeLaudrup"><img class="iconos" src="icons/github_ico.svg" alt="GitHub"></a>
                    <a class="area-link" href="mailto:maikelaudrupluisgonzalez@gmail.com?Subject=Solicitud%20de%20información"><img class="iconos" src="icons/enviar_ico.svg" alt="Enviar mail"></a>
                </div>
            </div>
        <!-- Footer Elements -->
        </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 " style="background-color: #343a40; color:white">© 2020 Copyright:
            <a href="https://MichaelaudrupluisGonzalez.es/" style="color:white">Autor: Michael Laudrup Luis Gonzalez</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Fin de pie de pagina web -->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script async src="js/main.js"></script>
</body>
</html>