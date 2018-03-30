<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29/03/2018
 * Time: 01:49 PM
 */
include ("funciones.php");
//genera_carpeta("galeria Nueva");

?>
<form name="form1" id="form1" method="post" action="guarda.php" enctype="multipart/form-data">

    <h4 class="text-center">Cargar Imagénes</h4>

    <div class="form-group">
        <label class="col-sm-2 control-label">Nombre de la galeria</label><input name="form_galeria" type="text" required><br>
        <label class="col-sm-2 control-label">Archivos</label>
        <div class="col-sm-8">
            <input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="">
        </div>

        <button type="submit" class="btn btn-primary">Cargar</button>
    </div>

</form>

