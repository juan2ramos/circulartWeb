<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title><?php echo $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description"
          content="Circulart2013 Mercado Cultural de Medellín dedicado a la industria musical Latinoamericana http://2013.circulart.org/ Encuentro anual, dedicado a la industria musical independiente de Latinoamérica, show cases, conferencias, talleres, networking, sesiones de negocios y una oportunidad única de descubrir la diversidad musical Iberoamericana.."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <!-- Meta Facebook -->
    <meta property="og:url" content="http://circulart.com.co/">
    <meta property="og:title" content="circulart"/>
    <meta property="og:description"
          content="Circulart2013 Mercado Cultural de Medellín dedicado a la industria musical Latinoamericana http://2013.circulart.org/ Encuentro anual, dedicado a la industria musical independiente de Latinoamérica, show cases, conferencias, talleres, networking, sesiones de negocios y una oportunidad única de descubrir la diversidad musical Iberoamericana.."/>
    <meta property="og:image" content="images/logo.png"/>


    <link rel="shortcut icon" href="favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Estilos -->
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>
<header>
    <div id="slide">
        <figure id="header-buttom">
            <img src="images/header/<?php echo($url)?>.jpg">
        </figure>
    </div>
    <div id="contend-logo">

        <div class="logo-circulart <?php echo($url)?>" class="">
            <img src="images/logo.png" alt="Logo Circulart"/>
        </div>
        <div class="logo <?php echo($url)?>">
            <img src="images/circulart.png" alt="Circulart"/>
        </div>
    </div>


</header>
<nav>
    <ul>
        <li><a href="que-es" class="active">qué es?</a></li>
        <li><a href="portafolios">portafolios artistas</a></li>
        <li><a href="mercado">Mercado</a></li>
        <li><a href="radio">circulart radio</a></li>
        <li><a href="noticias">noticias</a></li>
        <li><a href="contacto">contacto</a></li>
    </ul>
    <div id="network">
        <ul>
            <li id="twitter"><a href="#"><span class="icon-twitter"></span></a></li>
            <li id="facebook"><a href="#"><span class="icon-facebook"></span></a></li>
            <li id="pinterest"><a href="#"><span class="icon-pinterest"></span></a></li>
            <li id="youtube"><a href="#"><span class="icon-uniE603"></span></a></li>
        </ul>
    </div>


</nav>


<?php include $fileName; ?>

<footer>
    <ul id="nav-footer">

        <li><a href="#"><img src="images/redlat.jpg"></a></li>
        <li><a href="#"><img src="images/circulart.jpg"></a></li>
    </ul>
</footer>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script src="js/script.js"></script>
</body>
</html>