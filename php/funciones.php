<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29/03/2018
 * Time: 01:09 PM
 */
function genera_menu(){
    $directorio = opendir("imagenes/"); //ruta actual
    while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
    {

        if (preg_match("/png/", $archivo)|| preg_match("/jpg/", $archivo) || preg_match("/jpeg/", $archivo) || preg_match("/gif/", $archivo))//verificamos si es o no un directorio
        {
            // echo  "<a href='muestra_imagen.php?galery=".$archivo ."' class='icon-image'>".$archivo."</a><br />"; //de ser un directorio lo envolvemos entre corchetes
        } else{
            if($archivo=="." || $archivo==".."){
            }else {
                echo  "<a href='muestra_imagen.php?galery=".$archivo ."' class='icon-image'>".ucwords(str_replace("_"," ",$archivo))."</a>";
            }



        }

    }
}

function genera_carpeta($nombre){
    $nombre=strtolower(str_replace(" ","_",$nombre));
    $directorio = '../imagenes/'.$nombre; //Declaramos un  variable con la ruta donde guardaremos los archivos

    //Validamos si la ruta de destino existe, en caso de no existir la creamos
    if(!file_exists($directorio)){
        mkdir($directorio, 0777) or die("No se puede crear la carpeta para las imágenes");
        echo "Galería generada";
    } else{
        echo "ya existe";
    }
}
function listar_galerias(){

$directorio = opendir("../imagenes/"); //ruta actual
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
        /*echo '<figure class="vintalight__container"> <div class="vintalight__photo"><img class="vintalight__img" src="imagenes/'.$_GET['galery'].'/'.$archivo .
            '" alt=" "></div> </figure>';
        */
    }else{
        echo "<option class=\"btn btn-secondary\" value='".$archivo."'>".ucwords(str_replace("_"," ",$archivo));

    }


}
closedir($directorio);

}