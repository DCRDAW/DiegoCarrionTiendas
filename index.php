<?php
    if(isset($_POST["enviar"])){
        guardarFichero();
    }
    function guardarFichero(){
        $ruta= 'D:/xampp/htdocs/ejs/subirMultiplesFicheros/archivos/';
        
        comprobar();
        // Count # of uploaded files in array
        $total = count($_FILES['imagen']['name']);

        // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {

        //Get the temp file path
        $tmpFilePath = $_FILES['imagen']['tmp_name'][$i];

        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = $ruta.$_FILES['imagen']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {

            //Handle other code here

            }
        }
        }
        /*move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta.basename($_FILES["imagen"]["name"]));*/
    }
    function comprobar(){
        $array=array_diff(scandir("archivos/"), array('..', '.'));
        foreach ($array as $indice => $nombre) {
             // Count # of uploaded files in array
        $total = count($_FILES['imagen']['name']);

        // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {
            if(trim($nombre)==trim(basename($_FILES["imagen"]["name"][$i]))){
                $_FILES["imagen"]["name"][$i]=$nombre.$nombre;
            }
        }
            
        }  
    }
?>

<!DOCTYPE html>
<html lang="es">
    
    <head>
        <title>Archivos</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
        <link rel=stylesheet href=css/estilo.css />
    </head>
    <body>
        <h2>Subir imagenes</h2>
        <form method="post" enctype="multipart/form-data" action="">
            <label for="imagen">Introduce una imagen</label><br />
            <input type="file" name="imagen[]" multiple="multiple"><br />
            <input type="submit" name="enviar">
        </form>
        <h2><a href="php/nombres.php">Ver nombres imagen</a></h2>
        <h2><a href="php/imagenes.php">Ver imagenes </a></h2>
    </body>
</html>