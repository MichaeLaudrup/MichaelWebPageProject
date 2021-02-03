<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>3D Carousel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=1024">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31485994-5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-31485994-5');
    </script>
</head>
<body>

<div class="slider">
    <div class="wrapper">
        <div style="background-image: url('images/slide2.jpg')" class="item item1 active">
            <div class="item__info">
                <p class="item__title"><span>La zona del oráculo</span></p>
                <p class="item__description"><span>Descubre la información que puede obtener de ti cualquier web</span></p>
                <a href="javascript:void(0)" class="btn"><span>Descubre más</span></a>
            </div>
        </div>
        <div style="background-image: url('images/slide1.jpg')" class="item item2">
            <div class="item__info">
                <p class="item__title"><span>BIG DATA ZONE</span></p>
                <p class="item__description"><span>Descubre el potencial de sacar oro de cantidades masivas de datos</span></p>
                <a href="javascript:void(0)" class="btn"><span>Descubre más</span></a>
            </div>
        </div>
        <div style="background-image: url('images/slide3.jpg')" class="item item3">
            <div class="item__info">
                <p class="item__title"><span>NUEVOS PROYECTOS PROXIMAMENTE</span></p>
                <p class="item__description"><span>Ecommerce, Inteligencia artificial, ciberseguridad...etc </span></p>
                <a href="javascript:void(0)" class="btn"><span>Descubre más</span></a>
            </div>
        </div>
        
    </div>

    <div class="arrow arrow-next"></div>
    <div class="arrow arrow-prev"></div>
</div>

<script src="js/main.js"></script>
</body>
</html>