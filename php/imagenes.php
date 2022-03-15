<?php
    require_once "controlador.php";
    $control=new Controlador();
    $pedidos= $control->sacarPedidos(); 
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
            $array=array_values( array_diff(scandir("../archivos/"), array('..', '.')));
            foreach ($array as $indice => $nombre) {
                $imagenes=array_diff(scandir("../archivos/".$nombre."/"), array('..', '.'));
                echo '<h1>id del pedido='.$pedidos[$indice]["idPedido"].'</h1>';
                echo '<h1>Nombre del cliente='.$pedidos[$indice]["nombre"].'</h1>';
                echo '<h1>Fecha del pedido='.$pedidos[$indice]["Fecha"].'</h1>';
                foreach ($imagenes as $key => $imagen) {
                    echo '<div class="image"><img src="../archivos/'.$nombre.'/'.$imagen.'"></div><br />';
                }
                
            }
        ?>
        <h2><a href="pedido.php">Subir imagenes</a></h2>
        
    </body>
</html>