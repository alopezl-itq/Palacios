<?php
$i=1;
$galeria=$_POST['form_galeria'];
$fecha=(date("n_j_g_i_s"));
//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores

foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
{
    //Validamos que el archivo exista
    if($_FILES["archivo"]["name"][$key]) {
        $filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
        $source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
             $tipo= $_FILES['archivo']['type'][$key];
             if($tipo=="image/jpeg"||$tipo=="image/jpg"||$tipo=="image/png"||$tipo=="image/gif"){
                switch ($tipo){

                    case "image/gif":
                        $ext="gif";
                    case "image/jpeg":
                        $ext="jpeg";
                    case "image/jpg":
                        $ext="jpg";
                    case "image/png":
                        $ext="png";
                }



            $directorio = '../imagenes/'.$galeria; //Declaramos un  variable con la ruta donde guardaremos los archivos

            //Validamos si la ruta de destino existe, en caso de no existir la creamos
            if(!file_exists($directorio)){
                mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
            }

            $dir=opendir($directorio); //Abrimos el directorio de destino
            $target_path = $directorio.'/'.$fecha.$i.".".$ext; //Indicamos la ruta de destino, así como el nombre del archivo

            //Movemos y validamos que el archivo se haya cargado correctamente
            //El primer campo es el origen y el segundo el destino
            if(move_uploaded_file($source, $target_path)) {
                echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
                $i++;
            } else {
                echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
            }
                 closedir($dir);
            }
             else{
                echo "tipo de archivo inválido";
                 }
       //Cerramos el directorio de destino
    }
}
?>