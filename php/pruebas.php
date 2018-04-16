<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29/03/2018
 * Time: 01:49 PM
 */
include("funciones.php");


?>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="../css/demo.css"/>

    <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
    <script src="../js/modernizr.custom.25376.js"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div id="perspective" class="perspective effect-laydown">
    <div class="container">
        <div class="wrapper">
            <!-- wrapper needed for scroll -->
            <!-- Top Navigation -->
            <div class="codrops-top clearfix">
                <a class="codrops-icon codrops-icon-prev" href="index.html"><span>Inicio</span></a>
                <span class="right"><a class="codrops-icon codrops-icon-drop"
                                       href="../index.php"><span>Inicio</span></a>
                    </span>
            </div>
            <div class="main clearfix">

                <div>
                <form name="form1" id="form1" class="container" method="post" action="guarda.php"
                      enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center">Cargar Imagénes</h4>
                        </div>
                        <div class="col-md-4 ">
                            Seleccione la categoría
                            <select name="form_galeria" class="btn btn-primary">
                                <option value="" class="btn btn-secondary" selected>Seleccione una categoria
                                    <?php
                                    listar_galerias();
                                    ?>

                                </option>
                            </select>
                        </div>
                        <!--        <input name="form_galeria" type="text" required><br>-->


                        <div class="col-sm-4">
                            <label class="control-label ">Archivos</label>
                            <input type="file" class="form-control btn btn-primary" id="archivo[]" name="archivo[]"
                                   multiple="">
                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-secondary">Subir</button>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <br>
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-alert" data-toggle="modal" data-target="#myModal">
                            Agregar galería
                        </button>
                    </div>
                </form>


                <form action="pruebas.php" method="post">
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-sm">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Agregar galería</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="agregagaleria.php"
                                            style="width: 100% !important; height: 100px !important"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>

                                <script>
                                    $(document).ready(function () {
                                        $("#myModal").on('hidden.bs.modal', function () {
                                            location.reload();
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                </form>
                </div>
                s



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

</div>
<!-- /perspective -->
<script src="../js/classie.js"></script>
<script src="../js/menu.js"></script>
</body>

</body>
</html>