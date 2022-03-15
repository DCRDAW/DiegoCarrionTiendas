<?php
    require_once "controlador.php";
    $control=new Controlador();
    if(isset($_POST["enviar2"])){
        $control->pedido();
    }
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Archivos</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
        <link rel=stylesheet href=../css/estilo.css />
    </head>
    <body>
        <h2>Subir imagenes</h2>
        <form method="post" enctype="multipart/form-data" action="">
            <label for="imagen">Introduce las imagenes a guardar en el álbum</label><br />
            <input type="file" name="imagen[]" multiple="multiple"><br />
            <input type="submit" name="enviar2">
        </form>
        <h2><a href="imagenes.php">Ver imagenes </a></h2>
    </body>
</html>