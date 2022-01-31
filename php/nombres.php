<?php
    function mostrarNombres(){
        $array=array_diff(scandir("../archivos/"), array('..', '.'));  
        foreach ($array as $indice => $nombre) {
        echo "<div class='nombres'> imagen ".$indice+1,"=". $nombre."</div>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ver nombres de las imagenes</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
        <link rel=stylesheet href=../css/estilo.css />
    </head>
    <body>
        <h2><a href="php/nombres.php">Ver nombres imagen</a></h2>
        <?php
            mostrarNombres();
        ?>
        <h2><a href="../index.php">Subir imagenes</a></h2>
        
        
        <h2><a href="imagenes.php">Ver imagenes </a></h2>
    </body>
</html>