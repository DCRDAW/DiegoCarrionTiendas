<?php
 class Controlador{
     function __construct()
     {
        require 'modelo.php';
        $this->modelo=new Modelo();
     }
    function sacarPedidos(){
        return $this->modelo->sacarPedido();
    } 
    function pedido(){
        $this->introducirPedido();
        $this->guardarFichero();
    }
    function introducirPedido(){
        /*genera un numero de usuario aleatorio, ya que no tengo usuarios reales ni inicio de sesion, pero simplemente habria que coger el usuario del inicio de sesion que se ha hecho*/
        $this->modelo->introducir("'".rand(1,10)."'");
    }
    function guardarFichero(){
        $idPedido=$this->modelo->devolverId();
        $ruta= '../archivos/'.$idPedido.'/';
        mkdir('../archivos/'.$idPedido);
        $this->comprobar($idPedido);
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
    function comprobar($idPedido){
        $array=array_diff(scandir("../archivos/"), array('..', '.'));
        foreach ($array as $indice => $nombre) {
                // Count # of uploaded files in array
        $total = count($_FILES['imagen']['name']);

        // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {
            if(trim($nombre)==trim(basename($_FILES["imagen"]["name"][$i]))){
                $_FILES["imagen"]["name"][$i]=$nombre.$idPedido;
            }
        }
            
        }  
    }

    }
?>