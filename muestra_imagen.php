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
    <link rel="stylesheet" href="style.css">

</head>

<body>
<div id="perspective" class="perspective effect-laydown">
    <div class="container">
        <div class="wrapper">
            <!-- wrapper needed for scroll -->
            <!-- Top Navigation -->
            <div class="codrops-top clearfix">
                <a class="codrops-icon codrops-icon-prev" href="index.html"><span>Inicio</span></a>
                <span class="right"><a class="codrops-icon codrops-icon-drop" href="index.php"><span>Inicio</span></a>
                    </span>
            </div>
            <header class="codrops-header">
                <h1>Palacios All Around <span>Bienvenido</span></h1>
            </header>
            <div class="main clearfix">
                <div class="column_menu">
                    <p>
                        <button id="showMenu"> Menu</button>
                    </p>
                </div>

                <div>
                    <section class="vintalight" id="vintalight">

                        <?php
                        $directorio = opendir("imagenes/".$_GET['galery']); //ruta actual
                        $conta=1;

                        while ($archivo = readdir($directorio)) {

                            if ($archivo=="." || $archivo=="..") { echo " "; } else {

                                $archivos[$archivo] = $archivo;

                            }

                        }


                        arsort ($archivos);

                        //while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
                        foreach ($archivos as $archivo)
                        {
                            if (preg_match("/png/", $archivo) || preg_match("/jpg/", $archivo)|| preg_match("/jpeg/", $archivo) || preg_match("/gif/", $archivo)) {
                                    echo '<figure class="vintalight__container"> <div class="vintalight__photo"><img class="vintalight__img" src="imagenes/'.$_GET['galery'].'/'.$archivo .
                                    '" alt=" "></div> </figure>';
                                     $conta++;
                                }
                                if ($conta>6){
                                echo '</section> <section class="vintalight" id="vintalight1">';
                                $conta=1;
                                }


                        }
                        closedir($directorio);
                        ?>

                    </section>
                    <script src="script.js"></script>
                </div>
                <div class="related">
                    <p>Contactanos</p>
                    <p>Edna (832) 618-7720</p>
                    <p>César (956)371-5317</p>
                </div>
            </div>
            <!-- /main -->
        </div>
        <!-- wrapper -->
    </div>
    <!-- /container -->
    <nav class="outer-nav top horizontal">
        <a href="index.html" class="icon-image">Inicio </a>
        <?php


        genera_menu();
        ?>


    </nav>
</div>
<!-- /perspective -->
<script src="js/classie.js"></script>
<script src="js/menu.js"></script>
</body>

</html>
