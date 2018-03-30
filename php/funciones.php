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
        mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
        echo "carpeta generada";
    } else{
        echo "ya existe";
    }
}