<?php
include "php/funciones.php";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palacios All Around</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
    <script src="js/modernizr.custom.25376.js"></script>

</head>
<body>
<div id="perspective" class="perspective effect-laydown">
    <div class="container">
        <div class="wrapper"><!-- wrapper needed for scroll -->
            <!-- Top Navigation -->

            <header class="codrops-header">
                <h1>Palacios All Around <span>Bienvenido</span></h1>
            </header>
            <div class="main clearfix">
                <div class="column">
                    <p><button id="showMenu"> Menu</button></p>
                    <p>Para ver nuestras galerías presione menu.<br>To see our galleries press menu.</p>
                </div>
                <div class="column">
                    <img src="imagenes/logop.jpeg">
                </div>
                <div class="related">
                    <p>Contactanos</p>
                    <p>Edna (832) 618-7720</p>
                    <p> César (956)371-5317</p>
                    <p>encuentranos en <a href="http://www.facebook.com/palaciosallaround/" target="_blank">Facebook</a>    </p>
                </div>
            </div><!-- /main -->
        </div><!-- wrapper -->
    </div><!-- /container -->
    <nav class="outer-nav top horizontal">
        <!--<a href="gallery/" class="icon-image">Visitar nuestras galerías </a>
        <a href="aluminium.html" class="icon-image">Aluminuim && Glass </a>
        <a href="cabinets.html" class="icon-image">Custom Cabinets</a>
        <a href="granite.html" class="icon-image">Granite</a>
        <a href="pool.html" class="icon-image">Pool Decks</a>-->
        <?php
            genera_menu();
        ?>

    </nav>
</div><!-- /perspective -->
<script src="js/classie.js"></script>
<script src="js/menu.js"></script>
</body>
</html>