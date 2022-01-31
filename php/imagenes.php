<?php
    function mostrarIMG(){
        $array=array_diff(scandir("../archivos/"), array('..', '.'));  
        foreach ($array as $indice => $nombre) {
            echo '<div class="image"><img src="../archivos/'.$nombre.'"></div><br />';
        }
    }  
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ver imagenes</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
        <link rel=stylesheet href=../css/estilo.css />
    </head>
    <body>
        <h2><a href="imagenes.php">Ver imagenes </a></h2>
        <?php
            mostrarIMG();
        ?>
        <h2><a href="pedido.php">Subir imagenes</a></h2>
        
    </body>
</html>