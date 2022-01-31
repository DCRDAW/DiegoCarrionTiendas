<?php
    require 'operacionesbd.php';
    function guardarFichero(){
        $idPedido=1;
        $ruta= 'DiegoCarrionTiendas/archivos/'.$idPedido.'/';
        mkdir('../archivos/'.$idPedido);
        comprobar();
        $total = count($_FILES['imagen']['name']);
        for( $i=0 ; $i < $total ; $i++ ) {
        $tmpFilePath = $_FILES['imagen']['tmp_name'][$i];
        if ($tmpFilePath != ""){
            
            $newFilePath = $ruta.$_FILES['imagen']['name'][$i];
            
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {

            

            }
        }
        }
        /*move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta.basename($_FILES["imagen"]["name"]));*/
    }
    function comprobar(){
        $array=array_diff(scandir("../archivos/"), array('..', '.'));
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
    function formulario(){

    }
    