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
    <meta name="description" content="Circulart"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>

    <link rel="shortcut icon" href="./favicon.ico"/>
    <script src="js/prefixfree.min.js"></script>
    <!-- Estilos -->

    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>
<header>
    <div id="slide">

    </div>
    <div id="contend-logo">

        <div id="logo-circulart">
            <img src="images/logo.png" alt=""/>
        </div>
        <div id="logo">
            circul<span>art</span>
        </div>
    </div>
        <figure id="header-buttom">
        <img src="images/fondo-header.jpg">
    </figure>

</header>
<nav>
    <div id="network">
        <ul>
            <li><a href="#"><img src="images/twitter.jpg" alt=""/></a></li>
            <li><a href="#"><img src="images/facebook.jpg" alt=""/></a></li>
            <li><a href="#"><img src="images/pinterest.jpg" alt=""/></a></li>
            <li><a href="#"><img src="images/youtube.jpg" alt=""/></a></li>
        </ul>
    </div>
    <ul>
        <li><a href="que-es" class="active">¿que es?</a></li>
        <li><a href="portafolios"><span>portafolios</span><br/><span>artistas</span></a></li>
        <li><a href="mercado"><span>Mercado</span><br/><span>cultural</span><br/><span>de medellín</span></a></li>
        <li><a href="radio"><span>circulart</span><br/><span>radio</span></a></li>
        <li><a href="noticias"><span>noticias</span></a></li>
        <li><a href="contacto"><span>contacto</span></a></li>
    </ul>

</nav>


<?php include $fileName; ?>

<footer>
    <ul id="nav-footer">
        <li><a href="#" ><img src="images/min-cultura.jpg"></a></li>
        <li><a href="#" ><img src="images/prosperidad-para-todos.jpg"></a></li>
        <li><a href="#" ><img src="images/co-colombia.jpg"></a></li>
        <li><a href="#" ><img src="images/proexpo.jpg"></a></li>
        <li><a href="#" ><img src="images/redlat.jpg"></a></li>
        <li><a href="#" ><img src="images/circulart.jpg"></a></li>
    </ul>
</footer>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script src="js/script.js"></script>
</body>
</html>